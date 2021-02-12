<?php
function database(){
    $servername = "5.135.21.228";
    $dbusername = "maurice";
    $dbpassword = "Maur1ce1!";
    $dbname = "wifiyetu";

// Create connection
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
    $conn->set_charset("utf8");
    if (!$conn) {
        die("Connection failed.");
    } else {
        return $conn;
    }
}
