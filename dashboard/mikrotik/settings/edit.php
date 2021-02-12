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
    $ddns_name = check($_POST['ddns_name']);
    $port = check($_POST['m_port']);
    $m_username = check($_POST['m_username']);
    $m_password = check($_POST['m_password']);
    $hotspot_address = check($_POST['hotspot_address']);


    $error = "";
    if(empty($ddns_name)) $error = "DDNS Name should be filled out!";
    if (empty($port)) $error = "Port should not be empty!";
    if (empty($m_username)) $error = "Mikrotik username should be filled!";
    if (empty($m_password)) $error = "Password should not be empty!";
    if (empty($hotspot_address)) $error = "Hotspot address should not be empty!";

    if ($error == "") {
        $sql = "UPDATE mikrotik_settings SET ddns_name = '$ddns_name', hotspot_address = '$hotspot_address', mikrotik_password = '$m_password', mikrotik_username = '$m_username', port='$port' where
id=1";
        if (mysqli_query($conn, $sql)) {
            header('Content-Type: application/json');
            echo json_encode(array('status'=> 200, 'success'=>"Mikrotik settings updated successfully."));
            exit;
        } else {
            header('Content-Type: application/json');
            echo json_encode(array('error' => $conn->error));
            exit;
        }

    } else {
        header('Content-Type: application/json');
        echo json_encode(array('error' => $error));
        exit;
    }
}