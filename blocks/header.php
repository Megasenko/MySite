<?php require_once "functions.php"; ?>
<header>
<!-- проверяем какую кнопку показать - выход зарегистрированным или вход новым.-->

    <div id="reg_auth">
        <?php if (isset ($_SESSION['access']) && $_SESSION['access']===true) {
            echo "    <a href=\"/?logout\" id=\"logout\" title=\"Выйти\">
                        <div class=\"btn\">
                            Выйти
                        </div>
                      </a> ";
        } elseif (isset ($_SESSION['access']) && $_SESSION['access']===false) {
            echo "    <a href=\"/login.php\" id=\"login\" title=\"Войти в кабинет пользователя\">
                         <div class=\"btn\">
                             Войти
                         </div>
                      </a>";
        } ?>

<!-- В дальнейшем подключить к базе данных -->

        <!--        <a href="reg.php" id="registr" title="Зарегистрироваться на сайте">-->
        <!--            <div class="btn">-->
        <!--                Регистрация-->
        <!--            </div>-->
        <!--        </a>-->
    </div>
</header>
<nav>
    <div id="Menu">
        <a href="goods.php">Товары</a>
        <a href="feedback.php">Форма обратной связи</a>
    </div>
</nav>


