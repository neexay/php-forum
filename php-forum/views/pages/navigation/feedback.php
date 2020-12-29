<!-- Установка заголовка страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<?php if (!isset($title)) {
    ob_start(); ?>
    Форум-Сообщить об ошибке
    <?php $title = ob_get_clean();
} ?>
<!-- Установка СОДЕРЖИМОГО страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<?php if (!isset($content)) {
    ob_start(); ?>
    <form class="error_form" action="#">
        <div class="form">
            <div class="title">
                <h2>Сообщите об ошибке</h2>
                <hr>
            </div>
            <div class="title">
                <p>Опишите возникшую ошибку</p>
                <textarea name="error-texrarea" id="error-textarea" cols="130" rows="10" maxlength="600"
                          placeholder="Введите подробности" required></textarea>
            </div>
            <input type="submit" class="btn" value="Отправить">

        </div>
    </form>
    <?php $content = ob_get_clean();
} ?>

<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<?php require 'views/include/pages_template.php'; ?>