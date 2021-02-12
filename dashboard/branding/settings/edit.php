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
    $twitter = $facebook = $instagram = "";
    $first_brand_name= check($_POST['first_brand_name']);
    $second_brand_name = check($_POST['second_brand_name']);
    $phone_number = check($_POST['phone_number']);
    $facebook = check($_POST['facebook']);
    $twitter = check($_POST['twitter']);
    $instagram = check($_POST['instagram']);
    $email_address = check($_POST['email_address']);

    $error = "";
    if(empty($first_brand_name)) $error = "First brand name should be filled out!";
    if (empty($second_brand_name)) $error = "Second brand name should not be empty!";
    if (empty($phone_number)) $error = "Phone Number should be filled!";
    if (empty($email_address)) $error = "Email address should not be empty!";

    if ($error == "") {
        $sql = "UPDATE branding_settings SET email_address = '$email_address', facebook = '$facebook',
                             instagram = '$instagram', twitter ='$twitter', first_brand_name = '$first_brand_name', second_brand_name='$second_brand_name' 
                             WHERE id=1";
        if (mysqli_query($conn, $sql)) {
            header('Content-Type: application/json');
            echo json_encode(array('status'=> 200, 'success'=>"Branding settings updated successfully."));
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
