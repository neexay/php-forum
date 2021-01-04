<!-- ЕСЛИ НЕ ПОНЯТНА СТРУКТУРА ЧИТАТЬ ФАЙЛ - /views/include/pages_template.php -->
<? if (!isset($title)) {
    ob_start(); ?>
    PHP-Форум-Обратная связь
    <? $title = ob_get_clean();
} ?>

<? if (!isset($styles)) {
    ob_start(); ?>
    <link rel="stylesheet" href="/public/My_CSS/support_page.css" type="text/css">
    <? $styles = ob_get_clean();
} ?>

<!-- Установка СОДЕРЖИМОГО страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<? if (!isset($content)) {
    ob_start(); ?>
    <div class=" margin_content">
        <div class="container alert alert-success alert mt-2">
            <form class="form" id="form_support">
                <h2>Свяжитесь с нами</h2>
                <hr>
                <p>Напишите тему обращения:</p>
                <input class="form-control" placeholder="Тема вашего обращения...." required>
                <p class="mt-2">Подробно опишите суть вашего обращения:</p>
                <textarea class="form-control" name="error-texrarea" id="error-textarea" cols="130" rows="5"
                          maxlength="600" placeholder="Введите подробности" required></textarea>
                <input type="submit" class="btn btn-success mt-2" value="Отправить">
            </form>
        </div>
    </div>

    <? $content = ob_get_clean();
} ?>

<? if (!isset($scripts)) {
    ob_start(); ?>
    <script src="/public/MY_JS/support_page.js"></script>
    <? $scripts = ob_get_clean();
} ?>

<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<? require 'views/include/pages_template.php'; ?>
