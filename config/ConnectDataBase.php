<?php
//Подключаемся - внимательней с данными
define('HOST', 'localhost');
define('USER', 'forum');
define('PASSWORD', 'qwer1234');
define('DATABASE', 'php-forum');
try {
    //Создание обьекта mysqli
    $connect = new mysqli(HOST, USER, PASSWORD, DATABASE);
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
