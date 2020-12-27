<?php

require_once '../config/database.php';
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
mysqli_query($connect, "INSERT INTO `users`(`id`, `login`, `email`, `password`)
            VALUES(
                NULL,
                '$login',
                '$email',
                '$password'
)");
