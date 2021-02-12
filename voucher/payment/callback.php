<?php
ini_set('display_errors', 1);
include "../../vendor/autoload.php";
include "../../includes/mCredentials.php";

use AfricasTalking\SDK\AfricasTalking;

date_default_timezone_set("Africa/Nairobi");
//set an date and time to work with
$start = date('Y-m-d H:i:s', time());

if (!$request = file_get_contents("php://input")) {
    echo "Invalid input";
    exit();
} else {
    $array = json_decode($request, true);
    $result = ($array['Body']['stkCallback']['ResultDesc']);
    if ($result == "The service request is processed successfully.") {
        $result = $array['Body']['stkCallback']['CallbackMetadata']['Item'];
        foreach ($result as $res) {
            $name = $res['Name'];
            if ($name == "Amount") {
                $amount = $res['Value'];
            } elseif ($name === "MpesaReceiptNumber") {
                $mPesaReceiptNumber = $res['Value'];
            } elseif ($name === "PhoneNumber") {
                $phoneNumber = $res['Value'];
            }
        }
    }

    $sql = "INSERT INTO mpesa_payments (phone, receipt_number, amount) VALUES ('$phoneNumber', '$mPesaReceiptNumber', $amount)";

    if (mysqli_query($conn, $sql)) {
        if ($amount == 39) {
            $device = 1;
            $sub_time = "24 hrs";
            $package = "KES 39 - 24hrs (1 device)";
            $end = date('Y-m-d H:i:s', strtotime('+24 hours', strtotime($start)));
            $endDate = date('M/d/Y', strtotime($end));
            $endTime = date('H:i:s', strtotime($end));
        } elseif ($amount == 20) {
            $device = 1;
            $sub_time = "6 hrs";
            $package = "KES 20 - Try (1 device)";
            $end = date('Y-m-d H:i:s', strtotime('+6 hours', strtotime($start)));
            $endDate = date('M/d/Y', strtotime($end));
            $endTime = date('H:i:s', strtotime($end));
        } elseif ($amount == 29) {
            $device = 1;
            $sub_time = "12 hrs";
            $package = "KES 29 - 12HRS (1 device)";
            $end = date('Y-m-d H:i:s', strtotime('+12 hours', strtotime($start)));
            $endDate = date('M/d/Y', strtotime($end));
            $endTime = date('H:i:s', strtotime($end));
        } elseif ($amount == 200) {
            $device = 1;
            $sub_time = "7 days";
            $package = "KES 200 - 1 Week (1 device)";
            $end = date('Y-m-d H:i:s', strtotime('+7 days', strtotime($start)));
            $endDate = date('M/d/Y', strtotime($end));
            $endTime = date('H:i:s', strtotime($end));
        }

        include "../../includes/hotspotFunctions.php";

//        $status = checkUserExists($phoneNumber);

//        if ($status == 0) {
        $sql = "INSERT INTO users (username, password, admin, phone) VALUES ('$mPesaReceiptNumber', '$phoneNumber', 0, '$phoneNumber')";
        mysqli_query($conn, $sql);
        addUser($mHost, $mUser, $mPass, $mPesaReceiptNumber, $phoneNumber, "1 device");
        sendSms($phoneNumber, $mPesaReceiptNumber, $endDate, $endTime, $address);
        addScheduler($mHost, $mUser, $mPass, $mPesaReceiptNumber, $endDate, $endTime);
//        } else {
//            $sql = "SELECT * FROM users WHERE phone = '$phoneNumber'";
//            $result = mysqli_query($conn, $sql);
//            $user = mysqli_fetch_assoc($result);
//            $username = $user['username'];
//            $password = $user['password'];
//            activateUser($mHost, $mUser, $mPass, $username);
//            sendSms($password, $username, $endDate, $endTime, $address);
//            addScheduler($mHost, $mUser, $mPass, $username, $endDate, $endTime);
//        }

        // login user
        $sql = "SELECT * FROM ip WHERE phone = '$phoneNumber' order by id desc limit 1";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
        $password = $phoneNumber;
        $username = $mPesaReceiptNumber;
        if (isset($user['address'])) {
            $ip = $user['address'];
            loginUser($mHost, $mPass, $mUser, $password, $username, $ip);
        }
    } else {
        echo $conn->error;
    }
}

function checkUserExists($phone)
{
    $conn = database();

    $sql = "SELECT * FROM users WHERE phone = '$phone'";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        return 1;
    } else {
        return 0;
    }
}

function sendSms($phone, $receipt, $endDate, $endTime, $address)
{
    $username = 'mdande358'; // use 'sandbox' for development in the test environment
    $apiKey = 'af516db6246973ab5f6ee699e3997b9070d0f9dc7f42d8ce7f25660a1c473e63'; // use your sandbox app API key for development in the test environment
    $AT = new AfricasTalking($username, $apiKey);

// Get one of the services
    $sms = $AT->sms();

// Use the service
    $result = $sms->send([
        'from' => "WIFIYETU",
        'to' => $phone,
        'message' => "Voucher name: $receipt and voucher key: $phone. Your subscription expires on $endDate at $endTime. Click this link to start browsing. http://10.0.0.1/login?username=$receipt&password=$phone&dst=https://google.com"
    ]);
}
