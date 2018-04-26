<?php require_once "functions.php";
if(isset($_GET)){
    if(key_exists('logout',$_GET)){
        session_destroy();
        header('Location: /');
        exit;
    }
}
//if (isset($_POST) && !empty($_POST)) {
//    login($_POST);
//}

//if (isset($_SESSION['access']) && $_SESSION['access']) {
//    header('Location: /goods.php');
//    exit;
//}?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Megascore</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <meta name="description" content="Магазин">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <body>
<div id="wrapper">
    <div id="content">
        <?php require_once "blocks/header.php" ?>
        <p>Приветствуем Вас на нашем интернет магазине. </p>
        <p>Для дальнейшей навигации по сайту укажите, пожалуйста, Ваши: логин , Email и пароль.</p>
        <p>Для просмотра товаров нажмите раздел меню "<b><a href="goods.php">Товары</a></b>" и выберете понравившийся товар.</p>
        <p>С целью улучшения работы нашего магазина , Вы можете прислать пожелания по модернизации в разделе "<b><a href="feedback.php">Обратная связь</a></b>" </p>

        <i>пока имя и пароль test</i><br>

    </div>
    <img class="mega" src="img/logo1.png">
</div>

</body>
</html>