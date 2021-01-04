<?php session_start(); //стартуем сесию чтобы считывать данные записаные при авторизвции

// 1. Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Router.php');
require_once(ROOT . '/components/Renderer.php');
require_once(ROOT . '/components/Controller.php');
require_once(ROOT . '/models/Model_Base.php');

// 3. Установка соединения с БД
require_once(ROOT . '/config/ConnectDataBase.php');

// 4. Вызов Router
$router = new Router();
$router->run();
