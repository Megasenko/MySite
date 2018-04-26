<?php require_once "functions.php";
if (isset($_POST) && !empty($_POST)) {
    myReg($_POST);
}?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/form.css" type="text/css">
    <meta name="description" content="Магазин">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<div id="wrapper">
    <div id="content">
        <?php require_once "blocks/header.php" ?>
        <div id="main">
            <form action="" method="post">
                <div>
                    <input type="text" name="login" maxlength="25" placeholder="Ваше имя" value="<?= isset($_POST['login'])? $_POST['login'] : '';?>">
                    <br>
                    <input type="password" name="password" maxlength="16" placeholder="Пароль" value="<?= isset($_POST['password'])? $_POST['password'] : '';?>">
                </div>
                <input class="btn" type="submit" name="send" value="Отправить">



            </form>
        </div>
    </div>
</body>
