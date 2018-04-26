<?php require_once "functions.php"; ?>
<?php
if (!$_SESSION['access']) {
    header('Location: /login.php');
    exit;
}?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Заказ</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/form.css" type="text/css">
    <meta name="description" content="Магазин">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<body>
<div id="wrapper">
    <div id="content">
        <?php require_once "blocks/header.php" ?>
        <div id="main">
            <div>
                <?php $product = $_GET;?>
                <div style="clear: both"><br></div>
                <div class="product">
                    <?php if ($product) : ?>
<?php //print_r($_GET);?>

                        <form id="order" action="" method="post">
                            <label>От кого: </label><br>
                            <label>
                                <input type="email" name="from" placeholder="<?= $_SESSION["email"]?>" value="<?php $_SESSION["email"]?>"/>
                            </label><br>
                            <label>Название: </label><br>
                            <label>
                                <input type="text" name="title" placeholder="<?= $_GET["title"]; ?>" value="<?php $_GET["title"]; ?>"/>
                            </label><br>
                            <label>Цена: </label><br>
                            <label>
                                <input type="text" name="price" placeholder="<?= $_GET["price"]; ?>" value="<?php $_GET["price"]; ?>"/>
                            </label><br>
                            <label>Краткое описание товара: </label><br>
                            <label>
                                <input type="text" name="content" placeholder="<?= $_GET["content"]; ?>" value="<?php $_GET["content"]; ?>"/>
                            </label><br>
                            <input type="submit" class="btn" name="order" value="Отправить"/>

                        </form>















                    <?php else: ?>
                        <p>Product not found!!!</p>
                    <?php endif; ?>
                </div>
</body>

