<?php
include "../../includes/db_conf.php";
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use RouterOS\Client;
use RouterOS\Config;
use RouterOS\Exceptions\ClientException;
use RouterOS\Exceptions\ConfigException;
use RouterOS\Exceptions\QueryException;
use RouterOS\Query;

$conn = database();

$sql = "SELECT * FROM mikrotik_settings WHERE  id=1";
$result = mysqli_query($conn, $sql);
$connection = mysqli_fetch_assoc($result);

    $config = new Config([
        'host' => $connection['ddns_name'],
        'user' => $connection['mikrotik_username'],
        'pass' => $connection['mikrotik_password'],
        'port' => 8728,
    ]);
    $client = new Client($config);
    $query = (new Query('/system/routerboard/print'));
    $result = $client->q($query)->read();
    $query = (new Query('/ip/cloud/print'));
    $dnsResult = $client->q($query)->read();
    $query = (new Query('/ip/hotspot/user/profile/print'));
    $profiles = $client->q($query)->read();
    $query = (new Query('/ip/hotspot/active/print'));
    $active = $client->q($query)->read();


    $prof = array("");
    foreach ($profiles as $profile) {
        array_push($prof, $profile['name']);
    }

    header('Content-Type: application/json');
    echo json_encode(array(
    'firmwaretype' => $result[0]['firmware-type'],
    'boardName' => $result[0]['board-name'],
    'model' => $result[0]['model'],
    'serialNumber' => $result[0]['serial-number'],
    'dnsName' => $dnsResult[0]['dns-name'],
    'publicAddress' => $dnsResult[0]['public-address'],
    'profiles' => $prof,
    'active_users' => $active,
    'status' => 200));
exit;

