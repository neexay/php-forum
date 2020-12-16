<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Php форум</title>
    <link rel="stylesheet" href="css/header_and_footer.css" type="text/css">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <meta name="description" content="PHP петушатник">
    <meta name="keywords" content="PHP, Backend">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link href="img/php.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body>
<?php include_once 'pages/header.html' ?>

<h1>Добро пожаловать!</h1>
<form action="index.php" method="post" name="form">
    <input name="name" type="text" placeholder="Ваш логин"> <br>
    <input name="email" type="text" placeholder="Эл. почта"> <br>
    <textarea cols="32" name="message" rows="5" placeholder="Комментарий"> </textarea> <br>
    <input type="submit" value="Отправить">
</form>
<?php include_once 'pages/footer.html' ?>
</body>
</html>

