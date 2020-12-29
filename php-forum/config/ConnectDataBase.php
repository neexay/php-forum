<?php
//Подключаемся - внимательней с данными
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'php-forum');
try {
    //Создание обьекта mysqli
    $connect = new mysqli(HOST, USER, PASSWORD, DATABASE);
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}

