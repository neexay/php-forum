<?php
$hostname = "";
$username = "";
$password = "";
$db_name = "";
try {
    $connect = mysqli_connect($hostname, $username, $password, $db_name);
} catch (Exception $e) {
    var_dump($e->getMessage());
}