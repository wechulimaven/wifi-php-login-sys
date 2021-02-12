<?php
session_start();
ini_set('display_errors', 1);
date_default_timezone_set('Africa/Nairobi');
$date = date('Y-m-d H:i:s', time());
$ip = "";

include '../../includes/mCredentials.php';
include '../../includes/hotspotFunctions.php';
$conn = database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_SESSION['ip']))
        $ip = $_SESSION['ip'];
}

function check($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function session_variables($username, $admin)
{
    $_SESSION['username'] = $username;
    $_SESSION['loggedin'] = true;
    $_SESSION['admin'] = $admin;
}

function cookies($conn, $username)
{
    $length = 30;
    $token = bin2hex(random_bytes($length));
    setcookie('remember_me', $token, time() + (3600 * 24 * 3), "/");
    $sql = "UPDATE users SET cookie = '" . $token . "' WHERE username = '" . $username . "'";
    mysqli_query($conn, $sql);
}

//    declare variables
$username_error = $password_error = "";

$username = check($_POST['username']);
$password = check($_POST['password']);

if (empty($username)) {
    $username_error = "Username cannot be blank";
    $_SESSION['error'] = $username_error;
    header("location: index.php");
} else if (empty($password)) {
    $password_error = "Password cannot be blank";
    $_SESSION['error'] = $password_error;
    header("location: index.php");
}

if ($username_error == "" && $password_error == "") {
    // include database
    if ($conn) {
        $name = $username;

        $sql = "SELECT password, admin FROM users WHERE username = '$username'";
        $result = $conn->query($sql);
        $user = mysqli_fetch_assoc($result);
        $hash = $user['password'];
        $admin = $user['admin'];
        if ($password == $hash) {
            $message = loginUser($mHost, $mPass, $mUser, $hash, $username, $ip);
            //no more sessions are allowed for user
            if ($message == 1 || $message == 0) {
                session_variables($name, $admin);
                if (isset($_POST['remember'])) {
                    cookies($conn, $name);
                }
                header("location: /");
            } else {
                $_SESSION['error'] = $message;
            }
        } else {
            $_SESSION['error'] = "Invalid password or username";
            header("location: /");
        }
    }
}

$conn->close();
