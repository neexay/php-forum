<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "";
# $db_name = $db_host;
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); // коннект с сервером бд
$mysqli->set_charset("utf8mb4"); // задаем кодировку
