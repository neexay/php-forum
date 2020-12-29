<? if (!isset($_SESSION['id'])) {
    header("Location: /main");
}

// Установка СОДЕРЖИМОГО страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ!
if (!isset($title)) {
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
            <div id="edit_first_name" class="profile-name"><? echo $_SESSION['first_name']; ?></div>
            <div id="edit_last_name" class="profile-name"><? echo $_SESSION['last_name']; ?></div>
        </div>
        <div class="about-block">
            <div class="text">О себе:</div>
            <div id="edit_about" class="text"><? echo $_SESSION['about']; ?></div>
        </div>
        <div class="about-block">
            <div class="text">Contacts:</div>
            <div id="edit_email" class="text"><span><? echo $_SESSION['email']; ?></span></div>
        </div>
        <div class="about-block">
            <div class="text">Дата регистрациии на форуме:</div>
            <div class="text"><span><? echo $_SESSION['date_of_reg']; ?></span></div>
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
            <div id="my_modal" class="modal">
                <div class="modal_content">
                    <span class="close_modal_window">×</span>
                    <div id="modal_content">
                        <form>
                            <input type="text">
                            <input type="submit" value="Изменить">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $content = ob_get_clean();
} ?>

<?php if (!isset($scripts)) {
    ob_start(); ?>
    <script src="/php-forum/publicrum/public/js/profile.js"></script>
    <?php $scripts = ob_get_clean();
} ?>

<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<?php require 'views/include/pages_template.php'; ?>
