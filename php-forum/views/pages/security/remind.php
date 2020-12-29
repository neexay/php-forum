<!-- Установка заголовка страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<?php if (!isset($title)) {
    ob_start(); ?>
    Форум-главная страница
    <?php $title = ob_get_clean();
} ?>
<!-- Установка СОДЕРЖИМОГО страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<?php if (!isset($content)) {
    ob_start(); ?>
    <form class="formWithValidation" id="remind-password" action="../../../index.php">
        <div class="form">
            <div class="title">
                <h2>Восстановление пароля</h2>
                <hr>
            </div>

            <div class="title">
                <h3>Введите логин или почту</h3>
                <input type="text/email" class="field" size="30" required>
                <p>Вам придет письмо с дальнейшими инструкциями</p>
            </div>

            <input type="submit" class="btn" value="Выслать письмо">

            <div class="title">
                <p>Я вспомнил(а) пароль. <a href="/security/login">Войти</a></p>
            </div>

        </div>
    </form>

    <?php $content = ob_get_clean();
} ?>

<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<?php require 'views/include/pages_template.php'; ?>
