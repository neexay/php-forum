<?php if(!isset($title)){ ob_start(); ?>
    Форум-Регистрация
    <?php $title = ob_get_clean();} ?>

<?php if(!isset($content)){ ob_start(); ?>
    <form action="#">
        <div class="sign-form">
            <div class="title">
                <h2>Регистрация</h2>
                <hr>
            </div>

            <div class="title">
                <h3>Введите электронную почту</h3>
                <input type="email" size="30" required>
            </div>

            <div class="title">
                <h3>Введите имя</h3>
                <input type="text" size="30" required>
            </div>

            <div class="title">
                <h3>Введите пароль</h3>
                <input type="password" size="30" required>
            </div>

            <div class="title">
                <h3>Введите пароль еще раз</h3>
                <input type="password" size="30" required>
            </div>

            <input type="submit" class="btn" value="Регистрация">

            <p>Я уже зарегистрирован(а). <a href="/security/login">Авторизация</a></p>
        </div>
    </form>
    <?php $content = ob_get_clean();} ?>



<?php require 'views/include/pages_template.php'; ?>