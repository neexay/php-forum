<!-- ЕСЛИ НЕ ПОНЯТНА СТРУКТУРА ЧИТАТЬ ФАЙЛ - /views/include/pages_template.php -->
<? if (!isset($title)) {
    ob_start(); ?>
    PHP-Форум-Задать вопрос
    <? $title = ob_get_clean();
} ?>

<? if (!isset($content)) {
    ob_start(); ?>

    <div class="container col-md-8 bg-warning alert mt-3">
        <form class="form" id="Form_question">
            <h2>Новый вопрос</h2>
            <hr>
            <div class="form-group">
                <h3>Суть вопроса</h3>
                <p>Сформулируйте вопрос так, чтобы было сразу понятно, о чем речь</p>
                <textarea class="form-control" name="title" id="question" cols="130" rows="2" maxlength="130"
                          placeholder="Введите вопрос" required></textarea>
            </div>
            <div class="form-group">
                <h3>Теги вопроса</h3>
                <p>Ключевые слова от 1 до 5 штук</p>
                <textarea class="form-control" name="tags" id="tags" cols="130" rows="2" maxlength="130"
                          placeholder="Введите теги" required></textarea>
            </div>
            <div class="form-group">
                <h3>Детали вопроса</h3>
                <p>Опишите в подробностях свой вопрос</p>
                <textarea class="form-control" name="body" id="question_description" cols="130" rows="5" maxlength="600"
                          placeholder="Введите подробности" required></textarea>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-success" type="submit">Отправить</button>
            </div>
        </form>
    </div>

    <? $content = ob_get_clean();
} ?>

<? if (!isset($scripts)) {
    ob_start(); ?>
    <script src="/public/MY_JS/question_page.js"></script>
    <? $scripts = ob_get_clean();
} ?>

<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<? require 'views/include/pages_template.php'; ?>
