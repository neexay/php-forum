<!-- ЕСЛИ НЕ ПОНЯТНА СТРУКТУРА ЧИТАТЬ ФАЙЛ - /views/include/pages_template.php -->
<? if (!isset($title)) {
    ob_start(); ?>
    PHP-Форум-Сообщить об ошибке
    <? $title = ob_get_clean();
} ?>

<? if (!isset($styles)) {
    ob_start(); ?>
    <link rel="stylesheet" href="/public/My_CSS/feedback_page.css" type="text/css">
    <? $styles = ob_get_clean();
} ?>

<? if (!isset($content)) {
    ob_start(); ?>
    <div class=" margin_content">
        <div class="container bg-danger alert mt-2">
            <form class="form" id="form_submit_bug">
                <h2 class="text-white">Сообщите об ошибке</h2>
                <hr>
                <p class="text-white">Опишите возникшую ошибку:</p>
                <textarea class="form-control" name="error-texrarea" id="error-textarea" cols="130" rows="5"
                          maxlength="600" placeholder="Введите подробности" required></textarea>
                <input type="submit" class="btn btn-warning mt-2" value="Отправить">
            </form>
        </div>
    </div>
    <? $content = ob_get_clean();
} ?>

<? if (!isset($scripts)) {
    ob_start(); ?>
    <script src="/public/MY_JS/Feedback_debag_page.js"></script>
    <? $scripts = ob_get_clean();
} ?>

<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<? require 'views/include/pages_template.php'; ?>
