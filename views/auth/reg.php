<?php if(!isset($title)){ ob_start(); ?>
    Форум-Регистрация
    <?php $title = ob_get_clean();} ?>

<?php if(!isset($content)){ ob_start(); ?>
        <!-- Вывод результата о регистрации -->
        <?php if (isset($result)){ ?>
        <h1><?php echo $result; ?></h1>
        <br>
        <?php } ?>

    <form action="/reg" method="post">
        <div class="sign-form">
            <div class="title">
                <h2>Регистрация</h2>
                <hr>
            </div>

            <div class="title">
                <h3>Введите электронную почту</h3>
                <input type="email" size="30" required name="email">
            </div>

            <div class="title">
                <h3>Введите имя</h3>
                <input type="text" size="30" required name="name">
            </div>

            <div class="title">
                <h3>Введите пароль</h3>
                <input type="password" size="30" required name="password">
            </div>

            <div class="title">
                <h3>Введите пароль еще раз</h3>
                <input type="password" size="30" required name="password_comfirm">
            </div>

            <input type="submit" class="btn" value="Регистрация">

            <p>Я уже зарегистрирован(а). <a href="/login">Авторизация</a></p>
        </div>
    </form>
    <?php $content = ob_get_clean();} ?>



<?php require 'views/include/pages_template.php'; ?>