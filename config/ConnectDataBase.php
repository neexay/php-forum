<?php
$dbObject=connect();
function connect()
    {
        $host = "localhost";
        $base = "forum";
        $user = "forum";
        $pass = "qwer1234";
        $charset = "utf8";
        $dsn = "mysql:host=$host;dbname=$base;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_LAZY,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);
        return $pdo;
    }