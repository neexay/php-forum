<!-- ЕСЛИ НЕ ПОНЯТНА СТРУКТУРА ЧИТАТЬ ФАЙЛ - /views/include/pages_template.php -->
<? if (!isset($title)) {
    ob_start(); ?>
    PHP-Форум-Вопрос
    <? $title = ob_get_clean();
} ?>

<? if (!isset($styles)) {
    ob_start(); ?>
    <link rel="stylesheet" href="/public/css/question__page.css" type="text/css">
    <? $styles = ob_get_clean();
} ?>

<? if (!isset($content)) {
    ob_start(); ?>

    <? if (!isset($result)) { ?>
        <div class="block">
            <h1>Ошибка!</h1>
        </div>
    <? } else { ?>

        <div class="container alert alert-dark col-md-10 mt-5">
            <div class="media">
                <img src="/public/images/design-unique-word-press-website.png"
                     class="align-self-center rounded-circle mr-3" style="width:60px">
                <div class="media-body">
                    <h3><? echo $result['FirstAndLastName'] ?></h3>
                    <h6><i>опубликовано: </i><? echo $result['date_of_create'] ?></h6>
                </div>
            </div>
            <hr>
            <h5>Теги: <? echo $result['tags'] ?></h5>
            <hr>
            <h1><? echo $result['title'] ?></h1>
            <p>
                <? echo $result['body'] ?>
            </p>
            <hr>
        </div>

        <div class="comments">
            <? if (!isset($result['Answers'][0]['id'])) { ?>
                <div class="container alert alert-primary  mt-5">
                    <h1>Пока еще никто не ответил!</h1>
                    <hr>
                    <h5>Вы будите первым кто даст ответ!</h5>
                </div>

            <? } else {
                foreach ($result['Answers'] as $answer) { ?>

                    <div class="container alert alert-primary  mt-5">
                        <div class="media">
                            <img src="/public/images/design-unique-word-press-website.png"
                                 class="align-self-center rounded-circle mr-3" style="width:60px">
                            <div class="media-body">
                                <h3><? echo $answer['FirstAndLastName'] ?></h3>
                                <h6 class="text-dark"><i>ответ опубликован: </i><? echo $answer['date_of_create'] ?>
                                </h6>
                            </div>
                        </div>
                        <h6>
                            <? echo $answer['text'] ?>
                        </h6>
                    </div>
                <? }
            } ?>
        </div>
        <div class="container alert alert-info col-md-8 mt-5">
            <form class="form" id="Form_answer">
                <h2>Добавить ответ</h2>
                <hr>
                <input id="question_id" type="hidden" name="question_id" value="<? echo $result['id'] ?>">
                <h3>Отвечайте корректно!</h3>
                <p>Помогите решить проблемму</p>
                <textarea class="form-control" name="text" id="question_description" cols="130" rows="5"
                          maxlength="600" placeholder="Введите ваш ответ" required></textarea>
                <input type="submit" class="btn btn-success mt-2" value="ответить">
            </form>
        </div>
    <? } ?>

    <? $content = ob_get_clean();
} ?>

<? if (!isset($scripts)) {
    ob_start(); ?>
    <script src="/public/MY_JS/Answer_page.js"></script>
    <? $scripts = ob_get_clean();
} ?>

<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<? require 'views/include/pages_template.php'; ?>
