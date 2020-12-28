<!-- Установка заголовка страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<?php if (!isset($title)) {
    ob_start(); ?>
    Форум-главная страница
    <?php $title = ob_get_clean();
} ?>
<!-- Установка СОДЕРЖИМОГО страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<?php if (!isset($content)) {
    ob_start(); ?>
    <div class="wrapper-content">
        <div class="icon-name">
            <div class="profile-icon"></div>
            <div class="profile-name">Ivan Ivanov</div>
        </div>
        <div class="about-block">
            <div class="text">О себе:</div>
            <div class="text">Open Server</div>
        </div>
        <div class="about-block">
            <div class="text">Contacts:</div>
            <div class="text"><span>name-mail@mail.ru</span></div>
        </div>
        <div class="about-block">
            <p class="text">Включить темную тему</p>

            <div class="toggle-button-cover">
                <div class="theme">
                    <input type="checkbox" class="checkbox" checked>
                    <div class="knobs"></div>
                    <div class="layer"></div>
                </div>
            </div>

        </div>
    </div>

    <?php $content = ob_get_clean();
} ?>


<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<?php require 'views/include/pages_template.php'; ?>
