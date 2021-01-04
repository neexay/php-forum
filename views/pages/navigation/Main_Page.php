<!-- ЕСЛИ НЕ ПОНЯТНА СТРУКТУРА ЧИТАТЬ ФАЙЛ - /views/include/pages_template.php -->
<? if (!isset($title)) {
    ob_start(); ?>
    PHP-Форум-главная страница
    <? $title = ob_get_clean();
} ?>

<? if (!isset($styles)) {
    ob_start(); ?>
    <link rel="stylesheet" href="/public/My_CSS/Main_Page.css" type="text/css">
    <?php $styles = ob_get_clean();
} ?>

<? if (!isset($content)) {
    ob_start(); ?>

    <div id="header_carusel" class="carousel slide" data-ride="carousel" data-interval="6000" data-pause="false">
        <ul class="carousel-indicators">
            <li data-target="#header_carusel" data-slide-to="0" class="active"></li>
            <li data-target="#header_carusel" data-slide-to="1"></li>
            <li data-target="#header_carusel" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">

            <div class="carousel-item active ">
                <img src="/public/images/keyboard.jpg" alt="Клавиатура" width="1100" height="500">
                <div class="carousel-caption center_carusel_text">
                    <div class=" alert alert-success  opacity_07 ">
                        <div id="slide_1" class="carusel_title anim-typewriter line-1"></div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="/public/images/idea.jpeg" alt="Идея в образе лампочки" width="1100" height="500">
                <div class="carousel-caption center_carusel_text">
                    <div class=" alert alert-warning  opacity_07 ">
                        <div id="slide_2" class="carusel_title"></div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="/public/images/questions.jpg" alt="Знаки вопросов" width="1100" height="500">
                <div class="carousel-caption center_carusel_text">
                    <div class=" alert alert-info  opacity_07 ">
                        <div id="slide_3" class="carusel_title"></div>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#header_carusel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>

        <a class="carousel-control-next" href="#header_carusel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <? if (!isset($result[0]['id'])) { ?>
        <div class="container">
            <div class="card  bg-warning alert mt-2 align-middle">
                <h1 class="text-center d-block">Еще не задано ни одного вопроса!</h1>
            </div>
        </div>
    <? } else { ?>
        <div class="container">
            <div class="card  bg-warning alert mt-2 align-middle">
                <h1 class="text-center d-block">Последние 10 вопросов:</h1>
            </div>
        </div>

        <? for ($i = 0; $i < 10; $i++) {
            if (isset($result[$i]['id'])) { ?>
                <div class="container mb-2 mt-2 col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><? echo $result[$i]['FirstAndLastName'] ?>
                                |<? echo $result[$i]['tags'] ?></h4>
                            <h1><a class="text-decoration-none"
                                   href="/singleQuestion/id?id=<? echo $result[$i]['id'] ?>"> <? echo $result[$i]['title'] ?></a>
                            </h1>
                            <div class="text-right"><? echo $result[$i]['date_of_create'] ?></div>
                        </div>
                    </div>
                </div>
            <? }
        }
    } ?>

    <? $content = ob_get_clean();
} ?>

<? if (!isset($scripts)) {
    ob_start(); ?>
    <script src="/public/MY_JS/main_page.js"></script>
    <? $scripts = ob_get_clean();
} ?>

<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<? require 'views/include/pages_template.php'; ?>
