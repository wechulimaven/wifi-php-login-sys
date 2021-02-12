<?php
include "db_conf.php";
$conn = database();

$sql = "SELECT mikrotik_password, mikrotik_username, ddns_name, port, hotspot_address FROM mikrotik_settings";
$result = mysqli_query($conn, $sql);
$settings = mysqli_fetch_assoc($result);
$mHost = "ad8a0bc6f394.sn.mynetname.net";
$mPass = $settings['mikrotik_password'];
$mUser = $settings['mikrotik_username'];
$address = $settings['hotspot_address'];
