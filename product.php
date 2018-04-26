<?php require_once "functions.php"; ?>
<?php $product = $_GET;

if (!$_SESSION['access']) {
    header('Location: /login.php');
    exit;
} ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $product['title'] ?></title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <meta name="description" content="Магазин">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<body>
<div id="wrapper">
    <div id="content">
        <?php require_once "blocks/header.php" ?>
        <div id="main">
            <div>

                <div style="clear: both"><br></div>
<div class="product">
    <?php if ($product) : ?>
        <div class="article">
            <h1><?php echo $product['title'] ?></h1>
            <p>Цена товара:<?php echo $product['price']; ?>грн</p>
            <p class="content"><?php echo $product['content'] ?></p>
            <img src="<?php echo $product['img'];?>">
        </div>
        <a href="/order.php?title=<?= $product['title']; ?> &content=<?= $product['content']; ?> &img=<?= $product['img']; ?> &price=<?= $product['price']; ?>" id="order" title="Заказать товар">
            <div class="btn">
                Заказать
            </div>
        </a>
    <?php else: ?>
        <p>Articles not found!!!</p>
    <?php endif; ?>
</div>
</body>
