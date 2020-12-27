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

        $pdo = new PDO($dsn, $user, $pass);
        return $pdo;
    }