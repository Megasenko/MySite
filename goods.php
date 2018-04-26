<?php require_once "functions.php"; ?>
<?php
if (!$_SESSION['access']) {
    header('Location: /login.php');
    exit;
}
if (isset($_GET)) {
    if (key_exists('logout', $_GET)) {
        session_destroy();
        header('Location: /');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Товары</title>
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


                <div class="goods">

                    <?php $goods = getGoods(); ?>

                    <?php if ($goods) : ?>

                        <?php foreach ($goods as $product): ?>

                            <div class="product">
                                <a href="/product.php?title=<?= $product['title']; ?> &content=<?= $product['content']; ?> &img=<?= $product['img']; ?> &price=<?= $product['price']; ?>">
                                    <h1> <?= $product['title']; ?></h1>
                                </a>
                                <p>Цена товара:<?php echo $product['price']; ?>грн</p>
                                <p><?php echo $product['content']; ?></p>
                                <img class="img" src="<?php echo $product['img']; ?>">

                            </div>
                        <?php endforeach; ?>

                    <?php else: ?>
                        <p>Product not found!!!</p>

                    <?php endif; ?>
                    <!----------------------------------------->


                </div>
            </div>
        </div>
    </div>
</body>
</html>