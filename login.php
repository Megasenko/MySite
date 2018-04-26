<?php require_once "functions.php"; ?>

<?php

if (isset($_POST) && !empty($_POST)) {
    login($_POST);
}

if (isset($_SESSION['access']) && $_SESSION['access']) {
    header('Location: /');
    exit;
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/form.css" type="text/css">
    <title>Регистрация</title>
</head>
<body>
<div id="wrapper">
    <div id="content">
        <?php require_once "blocks/header.php" ?>
<form action="" method="post">
    <div>
        <input type="text" name="login" maxlength="25" placeholder="Ваше имя" >
        <br>
        <input type="email" name="email" maxlength="50" placeholder="Ваш Email" >
        <br>
        <input type="password" name="password" maxlength="16" placeholder="Пароль" >
    </div>
    <input type="submit" class="btn" name="data" value="Отправить">
</form>
</body>
</html>


