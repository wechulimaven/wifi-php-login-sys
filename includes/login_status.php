<?php
session_start();

$username = $_SESSION['username'];
$admin = $_SESSION['admin'];

if (!(isset($_SESSION['loggedin']))) {
    header("Location: ../index.php");
}
