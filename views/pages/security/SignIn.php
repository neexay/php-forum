<!-- Установка заголовка страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<?php if (!isset($title)) {
    ob_start(); ?>
    Форум-главная страница
    <?php $title = ob_get_clean();
} ?>
<!-- Установка СОДЕРЖИМОГО страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<?php if (!isset($content)) {
    ob_start(); ?>
    <form class="contact_form" action="#">
        <div class="sign-form">
            <div class="title">
                <h2>Авторизация</h2>
                <hr>
            </div>

            <div class="title">
                <h3>Введите логин или почту</h3>
                <input name="loginORemail" type="text/email" size="30" required>
            </div>

            <div class="title">
                <h3>Введите пароль</h3>
                <input name="password" type="password" size="30" required>
                <a href="/security/remind">Забыли пароль?</a>
            </div>

            <input type="submit" class="btn" value="Вход">

            <div class="title">
                <p>Я не зарегистрирован(а). <a href="/security/reg">Зарегистрироваться.</a></p>
            </div>
        </div>

    </form>

    <?php $content = ob_get_clean();
} ?>


<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<?php require 'views/include/pages_template.php'; ?>