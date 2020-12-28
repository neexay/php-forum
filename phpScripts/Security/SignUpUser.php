<?php
/*
require_once '../../config/database.php';
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT `login` FROM `users` WHERE `login` = '$login'";
$result = mysqli_query($connect, $query);
$count = mysqli_num_rows($result);

if ($count == 0) {
    mysqli_query($connect, "INSERT INTO `users`(`id`, `login`, `email`, `password`)
            VALUES(
                NULL,
                '$login',
                '$email',
                '$password')");
    echo 'Регистрация прошла успешно';
} else {
    echo 'Пользователь с таким логином уже существует';
}


*/