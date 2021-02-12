<?php
session_start();
ini_set('display_errors', 1);
date_default_timezone_set('Africa/Nairobi');

$timestamp = date('YmdHis', time());

$shortcode = '569842';
$consumerkey = 'CGw5Np49gP4DGgfU7EXtLj66O1FmLN9G';
$consumersecret = 'W7gWytAt4K4NkYSO';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $voucher = $phone = $device = $amount = $package = $sub_time = $ip = "";

    $error = "";
    $phone = $_POST['phone_number'];
    $ip = $_POST['ip'];
    if (isset($_POST['voucher'])) {
        $voucher = $_POST['voucher_name'];
        $_SESSION['voucher'] = $voucher;
    }
    $amount = $_POST['amount'];

    if (empty($phone)) $error = "The phone cannot be blank";

    if (strlen($phone) == 10) {
        $phone = "254" . ltrim($phone, "0");
    }

    if ($amount == "1") {
        $amount = 20;
        $device = 1;
        $sub_time = "6 hrs";
        $package = "KES 20 - 6hrs (1 device)";
    } elseif ($amount == "2") {
        $amount = 29;
        $device = 1;
        $sub_time = "12 hrs";
        $package = "KES 29 - 12hrs (1 device)";
    } elseif ($amount == "3") {
        $amount = 39;
        $device = 1;
        $sub_time = "24 hrs";
        $package = "KES 39 - 24HRS (1 device)";
    } elseif ($amount == "4") {
        $amount = 200;
        $device = 1;
        $sub_time = "7 days";
        $package = "KES 200 - 1 Week (1 device)";
    }

    $_SESSION['device'] = $device;
    $_SESSION['amount'] = $amount;
    $_SESSION['sub_time'] = $sub_time;
    $_SESSION['package'] = $package;

    saveIp($ip, $phone);
    $result = customerMpesaSTKPush($shortcode, $timestamp, $phone, $amount);
    if ($result = json_decode($result)) {
        if (isset($result->errorMessage)) {
            header("Content-type: Application/json");
            echo json_encode(array("error" => $result->errorMessage));
            exit();
        } else {
            header("Content-type: Application/json");
            echo json_encode(array("status" => 200, "message" => "Payment initiated successfully!"));
            exit();
        }
    }
} else {
    header("Content-type: application/json");
    echo json_encode(array("error" => "Request must be a post request!"));
    exit();
}

function check($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function lipaNaMpesaPassword($shortcode, $timestamp)
{
    $passkey = "ea1bb811a8cf256602269403fd11cc9c3a806870832da99869ea347848a302af";
    return base64_encode($shortcode . $passkey . $timestamp);
}

function customerMpesaSTKPush($shortcode, $timestamp, $phone, $amount)
{
    $url = 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization:Bearer ' . generateAccessToken()));
    $curl_post_data = [
        //Fill in the request parameters with valid values
        'BusinessShortCode' => $shortcode,
        'Password' => lipaNaMpesaPassword($shortcode, $timestamp),
        'Timestamp' => $timestamp,
        'TransactionType' => 'CustomerBuyGoodsOnline',
        'Amount' => $amount,
        'PartyA' => $phone, // replace this with your phone number
        'PartyB' => 569843,
        'PhoneNumber' => $phone, // replace this with your phone number
        'CallBackURL' => 'https://jersey.wifi-yetu.com/voucher/payment/callback.php',
        'AccountReference' => "Jersey Internet Payment",
        'TransactionDesc' => "Pay For Jersey Internet"
    ];
    $data_string = json_encode($curl_post_data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    return curl_exec($curl);
}

function generateAccessToken()
{
    $consumer_key = "CGw5Np49gP4DGgfU7EXtLj66O1FmLN9G";
    $consumer_secret = "W7gWytAt4K4NkYSO";
    $credentials = base64_encode($consumer_key . ":" . $consumer_secret);
    $url = "https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Basic " . $credentials));
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $curl_response = curl_exec($curl);
    $access_token = json_decode($curl_response);
    return $access_token->access_token;
}

function savePaymentClick($phone, $package, $amount)
{
    include "../../includes/db_conf.php";
    $conn = database();

    $sql = "INSERT INTO paymentClicks (phone, package, amount) VALUES ('$phone', '$package', $amount)";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function saveIp($ip, $phone)
{
    include "../../includes/db_conf.php";
    $conn = database();
    $sql = "INSERT INTO ip (address, phone) VALUES ('$ip', '$phone')";
    if (mysqli_query($conn, $sql)) {
        return 1;
    } else {
        return 0;
    }
}
