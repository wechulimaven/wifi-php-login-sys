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
    $title = check($_POST['title']);
    $speed = check($_POST['speed']);
    $downloads = check($_POST['downloads']);
    $validity = check($_POST['validity']);
    $price = check($_POST['price']);
    $time_seconds = check($_POST['time_seconds']);
    $voucher = check($_POST['voucher']);
    $user_profile = check($_POST['user_profile']);
    $data = check($_POST['data']);


    $error = "";
    if (empty($title)) $error = "Title cannot be empty!";
    if (empty($speed)) $error = "Speeds cannot be empty";
    if (empty($downloads)) $error = "Downloads cannot be empty!";
    if (empty($validity)) $error = "The validity cannot be empty!";
    if (empty($price)) $error = "Please fill in the price!";
    if (empty($time_seconds)) $error = "Time in seconds should not be empty!";
    if (empty($user_profile)) $error = "User profile cannot be empty!";
    if ($voucher == "on") {
        $voucher = true;
    }

    if ($error == "") {
        $sql = "INSERT INTO packages (title, speed, downloads, price, valid_for, subscribers, data, user_profile) VALUES ('$title','$speed', '$downloads', '$price', '$validity', '$voucher', '$data',
'$user_profile')";
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