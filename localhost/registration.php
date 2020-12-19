<?php include_once 'pages/header.html' ?>
    <head>
        <link rel="stylesheet" href="css/login.css" type="text/css">
        <link rel="stylesheet" href="css/header_and_footer.css">
        <link href="img/php.ico" rel="shortcut icon" type="image/x-icon">
        <link rel="script" href="src/js/reg_auth.js">
        <title>Регистрация</title>
    </head>
    <div class="box">
        <form action="registration.php" method="get">
            <span class="text-center">Добро пожаловать!</span>
            <div class="input-container">
                <input id="login" name="login" type="text" required="" placeholder="Логин"/>
            </div>
            <div class="input-container">
                <input id="email" name="email" type="" required="" placeholder="Эл. почта"/>
            </div>
            <div class="input-container">
                <input id="password1" name="password1" type="" required="" placeholder="Придумайте пароль"/>
            </div>
            <div class="input-container">
                <input id="password2" name="password2" type="" required="" placeholder="Подтвердите пароль"/>
            </div>
            <input id="submit_btn" type="submit" value="Зарегистрироваться" class="button">
        </form>
    </div>
<?php include_once 'pages/footer.html' ?>
