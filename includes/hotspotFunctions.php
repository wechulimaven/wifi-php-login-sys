<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use RouterOS\Client;
use RouterOS\Exceptions\ClientException;
use RouterOS\Exceptions\ConfigException;
use RouterOS\Exceptions\QueryException;
use RouterOS\Query;

function addProfile($mHost, $mUser, $mPass, $name, $rate)
{
    try {
        $client = new Client([
            'host' => "$mHost",
            'user' => "$mUser",
            'pass' => "$mPass"
        ]);

        try {
            $query =
                (new Query('/ip/hotspot/user/profile/add'))
                    ->equal('name', "$name")
                    ->equal('address-pool', "dhcp")
                    ->equal('idle-timeout', "00:05:00")
                    ->equal('incoming-packet-mark', "$name")
                    ->equal('keepalive-timeout', "00:05:00")
                    ->equal('shared-users', '1')
                    ->equal('rate-limit', "$rate");
            return $client->query($query)->read();
        } catch (QueryException $e) {
            echo $e;
        }
    } catch (ClientException $e) {
        return $e;
    } catch (ConfigException $e) {
        return $e;
    } catch (QueryException $e) {
        return $e;
    }
}

function loginUser($mikrotikIp, $mikrotikPass, $mikrotikUser, $pass, $name, $ip)
{
    try {
        $client = new Client([
            'host' => $mikrotikIp,
            'user' => $mikrotikUser,
            'pass' => $mikrotikPass
        ]);

        $query = (new Query("/ip/hotspot/user/print"))
            ->where('name', "$name");
        $response = $client->query($query)->read();
        if ($response) {
            foreach ($response as $user) {
                $name = $user['name'];
                $query = (new Query('/ip/hotspot/user/profile/getall'))
                    ->where('name', "1 device");

                $response = $client->query($query)->read();
                foreach ($response as $profile) {
                    if ($profile['rate-limit'] !== "0M/0M") {

                        $query = (new Query("/ip/hotspot/active/getall"))
                            ->where("user", "$name");
                        $response = $client->query($query)->read();

                        if (empty($response)) {
                            $query = (new Query("/ip/hotspot/active/login"))
                                ->equal('user', $name)
                                ->equal('password', $pass)
                                ->equal('ip', $ip);
                            $response = $client->query($query)->read();
                            if ($response) {
                                return 0;
                            } else {
                                return 1;
                            }
                        } else {
                            $query = (new Query("/ip/hotspot/active/print"));

                            $user = $client->query($query)->read();
                            $id = $user[0]['.id'];
                            $query = (new Query("/ip/hotspot/active/remove"))
                                ->equal(".id", "$id");
                            $response = $client->query($query)->read();
                            $query = (new Query("/ip/hotspot/active/login"))
                                ->equal('user', $name)
                                ->equal('password', $pass)
                                ->equal('ip', $ip);
                            $response = $client->query($query)->read();
                            if ($response) {
                                return 0;
                            } else {
                                return 1;
                            }
                        }
                    } else {
                        return 0;
                    }
                }
            }
        }
    } catch (ClientException $e) {
        return $e;
    } catch (ConfigException $e) {
        return $e;
    } catch (QueryException $e) {
        return $e;
    }
}

function changeProfile($mHost, $mUser, $mPass, $name, $rate)
{
    try {
        $client = new Client([
            'host' => $mHost,
            'user' => $mUser,
            'pass' => $mPass
        ]);

        try {
            $query =
                (new Query('/ip/hotspot/user/profile/print'))
                    ->where('name', "$name");
            $response = $client->query($query)->read();
            foreach ($response as $user) {
                $id = $user['.id'];
                $query =
                    (new Query('/ip/hotspot/user/profile/set'))
                        ->equal('rate-limit', "$rate")
                        ->equal('.id', "$id");
                return $client->query($query)->read();
            }
        } catch (QueryException $e) {
            return $e;
        }
    } catch (ClientException $e) {
        return $e;
    } catch (ConfigException $e) {
        return $e;
    } catch (QueryException $e) {
        return $e;
    }
}

function changePassword($mHost, $mUser, $mPass, $name, $newPass)
{
    try {
        $client = new Client([
            'host' => $mHost,
            'user' => $mUser,
            'pass' => $mPass
        ]);

        $password = password_hash($newPass, PASSWORD_DEFAULT);
        try {
            $query =
                (new Query('/ip/hotspot/user/getall'))
                    ->where('name', "$name");

            $response = $client->query($query)->read();

            foreach ($response as $user) {
                $id = $user['.id'];

                $query =
                    (new Query('/ip/hotspot/user/set'))
                        ->equal('password', "$password")
                        ->equal('.id', "$id");

                return $client->query($query)->read();
            }
        } catch (QueryException $e) {
            return $e;
        }
    } catch (ClientException $e) {
        return $e;
    } catch (ConfigException $e) {
        return $e;
    } catch (QueryException $e) {
        return $e;
    }
}

function addUser($mHost, $mUser, $mPass, $name, $uPass, $profile)
{
    try {
        $client = new Client([
            'host' => $mHost,
            'user' => $mUser,
            'pass' => $mPass
        ]);
        try {
            $query =
                (new Query('/ip/hotspot/user/add'))
                    ->equal('server', "SERVER1")
                    ->equal('name', "$name")
                    ->equal('password', "$uPass")
                    ->equal('profile', "$profile");
            print_r($client->query($query)->read());
        } catch (QueryException $e) {
            return $e;
        }
    } catch (ClientException $e) {
        return $e;
    } catch (ConfigException $e) {
        return $e;
    } catch (QueryException $e) {
        return $e;
    }
}

function addScript($mHost, $mUser, $mPass, $name)
{
    try {
        $client = new Client([
            'host' => "$mHost",
            'user' => "$mUser",
            'pass' => "$mPass"
        ]);

        $source = "/ip hotspot user profile set [find name=\"$name\"] rate-limit=0M/0M; /ip hotspot active remove [find user=\"$name\"]; /ip hotspot cookie remove [find user=\"$name\"]; /system scheduler remove [find name=\"deactivate-$name\"]; /system script remove [find name=\"deactivate-$name\"]";
        try {
            $query =
                (new Query('/system/script/add'))
                    ->equal('name', "deactivate-$name")
                    ->equal('source', "$source");
            return $client->query($query)->read();
        } catch (QueryException $e) {
            return $e;
        }

    } catch (ClientException $e) {
        return $e;
    } catch (ConfigException $e) {
        return $e;
    } catch (QueryException $e) {
        return $e;
    }
}

function addScheduler($mHost, $mUser, $mPass, $name, $date, $time)
{
    $source = "/ip hotspot active remove [find user=\"$name\"]; /ip hotspot cookie remove [find user=\"$name\"]; /ip hotspot user remove $name; /system scheduler remove [find name=\"$name\"]";

    try {
        $client = new Client([
            'host' => "$mHost",
            'user' => "$mUser",
            'pass' => "$mPass"
        ]);

        $query = (new Query('/system/scheduler/print'))
            ->where('name', "$name");

        $response = $client->query($query)->read();
        if (!empty($response)) {
            foreach ($response as $scheduler) {
                $id = $scheduler['.id'];
                $query = (new Query('/system/scheduler/remove'))
                    ->equal('.id', "$id");
                $response = $client->query($query)->read();
                if (empty($response)) {
                    $query =
                        (new Query('/system/scheduler/add'))
                            ->equal('name', "$name")
                            ->equal('start-date', "$date")
                            ->equal('start-time', "$time")
                            ->equal('interval', '00:01:00')
                            ->equal('on-event', "$source");
                    print_r($client->query($query)->read());
                }
            }
        } else {
            $query =
                (new Query('/system/scheduler/add'))
                    ->equal('name', "$name")
                    ->equal('start-date', "$date")
                    ->equal('start-time', "$time")
                    ->equal('interval', '00:10:00')
                    ->equal('on-event', "$source");
            print_r($client->query($query)->read());
        }
    } catch (ClientException $e) {
        return $e;
    } catch (ConfigException $e) {
        return $e;
    } catch (QueryException $e) {
        return $e;
    }
}

function activateUser($mHost, $mUser, $mPass, $username)
{
    try {
        $client = new Client([
            'host' => "$mHost",
            'user' => "$mUser",
            'pass' => "$mPass"
        ]);

        $query = (new Query('/ip/hotspot/user/print'))
            ->where('name', $username);
        $response = $client->query($query)->read();
        $id = $response[0]['.id'];
        $query = (new Query('/ip/hotspot/user/enable'))
            ->equal('.id', $id);
        $response = $client->query($query)->read();
        print_r($response);

    } catch (ClientException $e) {
    } catch (ConfigException $e) {
    } catch (QueryException $e) {
    }
}

