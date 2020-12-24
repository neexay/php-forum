<?php
// FRONT CONTROLLER

// 1. Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT . '\components\Router.php');

// 3. Установка соединения с БД
$hostname = "localhost";
$username = "root";
$password = "root";
$db_name = "php-forum";
try {
    $connect = mysqli_connect($hostname, $username, $password, $db_name);
} catch (Exception $e) {
    var_dump($e->getMessage());
}

// 4. Вызов Router
$router = new Router();
$router->run();