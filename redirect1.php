<?php require_once "functions.php";

if (isset($_POST) && !empty($_POST)) {
    login($_POST);
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Обратная связь</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <meta name="description" content="Магазин">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <body>
<div id="wrapper">
    <div >
        <?php require_once "blocks/header.php" ?>
        <a href="/" id="btnMail" title="На главную">
            <div class="btn">
                На главную
            </div>
        </a>
    </div>
    <div id="mail">
        <?php if(isset($_GET)){
            $good=$_GET['good'];
            if($good==2){
                echo "<p>Ваше сообщение успешно отправлено отправлено</p>";
            }
        }?>
    </div>
</div>
</body>
</html>