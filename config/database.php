<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'php-forum');
try {
    $connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}