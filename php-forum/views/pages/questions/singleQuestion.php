<!-- Установка заголовка страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<?php if (!isset($title)) {
    ob_start(); ?>
    Вопрос
    <?php $title = ob_get_clean();
} ?>

<?php if (!isset($styles)) {
    ob_start(); ?>
    <link rel="stylesheet" href="/php-forum/publicrum/public/css/question__page.css" type="text/css">
    <?php $styles = ob_get_clean();
} ?>

<!-- Установка СОДЕРЖИМОГО страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<?php if (!isset($content)) {
    ob_start(); ?>

    <div>
        <? if (!isset($result)) { ?>
            <div class="block">
                <h1>Ошибка!</h1>
            </div>
        <? } else { ?>
            <div class="user-info">
                <div class="mini-icon"></div>
                <div class="user-name"><a href=""><? echo $result['FirstAndLastName'] ?></a></div>
            </div>
            <br>
            <hr>
            <div class="ask-tags">
                <? echo $result['tags'] ?>
            </div>
            <div class="title">
                <h2><? echo $result['title'] ?></h2>
            </div>
            <div class="ask-description">
                <p>
                    <? echo $result['body'] ?>
                </p>
                <hr>
                <br>
                <p><? echo $result['date_of_create'] ?></p>
            </div>
            <hr>
            <div class="comments">
                <? if (!isset($result['Answers'][0]['id'])) { ?>
                    <div class="comment-block">
                        <div class="comment-header">
                            <h1>Пока еще никто не ответил!</h1>
                        </div>
                        <div class="comment-description">
                            Вы будите первым кто даст ответ!
                        </div>
                    </div>
                <? } else {
                    foreach ($result['Answers'] as $answer) { ?>
                        <div class="comment-block">
                            <div class="comment-header">
                                <div class="user-info">
                                    <div class="mini-icon"></div>
                                    <div class="user-name"><? echo $answer['FirstAndLastName'] ?>
                                        -/-<? echo $answer['date_of_create'] ?></div>
                                </div>
                            </div>
                            <div class="comment-description">
                                <p>
                                    <? echo $answer['text'] ?>
                                </p>
                            </div>
                        </div>
                    <? }
                } ?>
            </div>
            <form class="contact_form" id="Form_answer">
                <div class="ask">
                    <div class="title">
                        <h2>Добавить ответ</h2>
                        <hr>
                    </div>
                    <input id="question_id" type="hidden" name="question_id" value="<? echo $result['id'] ?>">
                    <div class="title">
                        <h3>Отвечайте корректно!</h3>
                        <p>Помогите решить проблемму</p>
                        <textarea name="text" id="question_description" cols="130" rows="10" maxlength="600"
                                  placeholder="Введите ваш ответ" required></textarea>
                    </div>
                    <input type="submit" class="btn" value="ответить">
                </div>
            </form>
        <? } ?>
    </div>
    <?php $content = ob_get_clean();
} ?>

<?php if (!isset($scripts)) {
    ob_start(); ?>
    <script src="/php-forum/publicrum/public/js/Answer.js"></script>
    <?php $scripts = ob_get_clean();
} ?>

<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<?php require 'views/include/pages_template.php'; ?>