<?php session_start();
ini_set('display_errors', 1);
include "../../includes/mCredentials.php";
include "../../includes/hotspotFunctions.php";
if (isset($_SESSION['ip'])) {
    $ip = $_SESSION['ip'];
    $mac = $_SESSION['mac'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = '';
    function check($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = check($_POST['username']);
    $password = check($_POST['password1']);
    $password2 = check($_POST['password2']);
    $phone = check($_POST['phone']);
    if (strlen($phone) == 10) {
        $phone = "254" . ltrim($phone, "0");
    }

    if (empty($username)) $error = "Username cannot be empty!";
    if (empty($password)) $error = "Password cannot be empty!";
    if ($password != $password2) $error = "Passwords do not match!";
    if (strlen($password) < 8) $error = "Password should be more than 8 characters!";
    if (empty($phone)) $error = "Phone number cannot be empty!";

    if (empty($error)) {
        $sql = "SELECT * FROM users WHERE username='" . $username . "'";
        $results = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($results);
        if ($count > 0) {
            $error = "Username already exists!";
        } else {
            $message = addUser($mHost, $mUser, $mPass, $username, $password, '1 device');
            $sql = "INSERT INTO users (username, password, admin, phone) VALUES ('$username','$password', 0, '$phone')";
            if (mysqli_query($conn, $sql)) {
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['admin'] = 0;
                header("location: /");
            } else {
                $error = $conn->error;
            }
        }
    }
    if ($error != "") {
        $_SESSION['error'] = $error;
        header('location: index.php');
    }
}
