<?php
include "../../../includes/db_conf.php";
$conn = database();

function check($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $africastalking = check($_POST['africastalking']);
    $sms_username = check($_POST['sms_username']);
    $africastlkn_sender= check($_POST['africastlkn_sender']);
    $transaction_sms = check($_POST['transaction_sms']);
    $reminder_sms = check($_POST['reminder_sms']);
    $reminder_frequency = check($_POST['reminder_frequency']);
    $sms_key = check($_POST['sms_key']);


    $error = "";
    if (empty($africastalking)) $error = "Field cannot be empty!";
    if (empty($sms_username)) $error = "Username cannot be empty";
    if (empty($africastlkn_sender)) $error = "Sender cannot be empty!";
    if (empty($reminder_frequency)) $error = "Frequency should not be empty!";
    if ($transaction_sms == 'on') {
        $transaction_sms = 1;
    } else {
        $transaction_sms = 0;
    }

    if ($reminder_sms == 'on') {
        $reminder_sms = 1;
    } else {
        $reminder_sms = 0;
    }

    if ($error == "") {
        $sql = "UPDATE sms_settings SET username='$sms_username', api_key = '$sms_key', sender_id = '$africastlkn_sender', transaction_sms = '$transaction_sms', reminder_sms = '$reminder_sms', time_to_expiration = '$reminder_frequency' WHERE id = 1";
        if (mysqli_query($conn, $sql)) {
            header('Content-Type: application/json');
            echo json_encode(array('status' => 200));
            exit;
        } else {
            header('Content-Type: application/json');
            echo json_encode(array('error' => $conn->error));
            exit;
        }
    }

    if ($error != '') {
        print_r(array("error"=>$error));
    }
}