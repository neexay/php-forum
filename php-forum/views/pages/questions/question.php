<!-- Установка заголовка страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<?php if (!isset($title)) {
    ob_start(); ?>
    Форум-Задать вопрос
    <?php $title = ob_get_clean();
} ?>
<!-- Установка СОДЕРЖИМОГО страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<?php if (!isset($content)) {
    ob_start(); ?>
    <form class="contact_form" id="Form_question">
        <div class="ask">
            <div class="title">
                <h2>Новый вопрос</h2>
                <hr>
            </div>
            <div class="title">
                <h3>Суть вопроса</h3>
                <p>Сформулируйте вопрос так, чтобы было сразу понятно, о чем речь</p>
                <!-------обработка поля в php-->
                <textarea name="title" id="question" cols="130" rows="2" maxlength="130"
                          placeholder="Введите вопрос"
                          required></textarea>
            </div>
            <div class="title">
                <h3>Теги вопроса</h3>
                <p>Ключевые слова от 1 до 5 штук</p>
                <!-------обработка поля в php-->
                <textarea name="tags" id="tags" cols="130" rows="2" maxlength="130"
                          placeholder="Введите теги"
                          required></textarea>
            </div>
            <div class="title">
                <h3>Детали вопроса</h3>
                <p>Опишите в подробностях свой вопрос</p>
                <textarea name="body" id="question_description" cols="130" rows="10" maxlength="600"
                          placeholder="Введите подробности" required></textarea>
            </div>
            <input type="submit" class="btn" value="Отправить">
        </div>
    </form>
    <?php $content = ob_get_clean();
} ?>

<?php if (!isset($scripts)) {
    ob_start(); ?>
    <script src="/php-forum/publicrum/public/js/question.js"></script>
    <?php $scripts = ob_get_clean();
} ?>

<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<?php require 'views/include/pages_template.php'; ?>