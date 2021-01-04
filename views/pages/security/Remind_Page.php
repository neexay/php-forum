<!-- ЕСЛИ НЕ ПОНЯТНА СТРУКТУРА ЧИТАТЬ ФАЙЛ - /views/include/pages_template.php -->
<? if (!isset($title)) {
    ob_start(); ?>
    PHP-Форум-восстановить пароль
    <? $title = ob_get_clean();
} ?>

<? if (!isset($styles)) {
    ob_start(); ?>
    <link rel="stylesheet" href="/public/My_CSS/Remind_Page.css" type="text/css">
    <? $styles = ob_get_clean();
} ?>

<!-- Установка СОДЕРЖИМОГО страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<? if (!isset($content)) {
    ob_start(); ?>
    <div class="container col-md-6 mt-5">
        <form class="form" id="form_remind">
            <h2>Восстановление пароля</h2>
            <hr>
            <h3>Введите логин или почту</h3>
            <input class="form-control" type="text/email" class="field" size="30" required>
            <p>Вам придет письмо с дальнейшими инструкциями</p>
            <input type="submit" class="btn btn-success" value="Выслать письмо">
            <p>Я вспомнил(а) пароль. <a href="/security/login">Войти</a></p>
        </form>
    </div>

    <? $content = ob_get_clean();
} ?>

<? if (!isset($scripts)) {
    ob_start(); ?>
    <script src="/public/MY_JS/remind_password_page.js"></script>
    <? $scripts = ob_get_clean();
} ?>

<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<? require 'views/include/pages_template.php'; ?>
