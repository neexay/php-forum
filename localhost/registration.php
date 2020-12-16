<?php include_once 'pages/header.html' ?>
<head>
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <link rel="stylesheet" href="css/header_and_footer.css">
    <link href="img/php.ico" rel="shortcut icon" type="image/x-icon">
    <title>Регистрация</title>
</head>
<div class="box">
    <form action="src/reg_auth.php" method="get">
        <span class="text-center">Добро пожаловать!</span>
        <div class="input-container">
            <input name="login" type="text" required="" placeholder="Логин"/>
        </div>
        <div class="input-container">
            <input name="email" type="" required="" placeholder="Эл. почта"/>
        </div>
        <div class="input-container">
            <input name="password1" type="" required="" placeholder="Придумайте пароль"/>
        </div>
        <div class="input-container">
            <input name="password2" type="" required="" placeholder="Подтвердите пароль"/>
        </div>
        <input type="submit" class="button">Зарегистрироваться</input>
    </form>
</div>
<?php include_once 'pages/footer.html' ?>

