<?php
require_once "functions.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/form.css" type="text/css">
    <title>Обратная связь</title>
</head>
<body>
<?php require_once "blocks/header.php" ?>


    <form id="feedback" action="" method="post">
        <label>От кого: </label><br/>
        <label>
            <input type="text" name="from" placeholder="Введите Email" value="<?= isset($_POST["from"])?$_POST["from"]:''; ?>"/>
            <span style="color: red"><?= isset($error_from)? $error_from : '';?></span>
            <br/>
        </label><br/>
        <label>Тема: </label><br/>
        <label>
            <input type="text" name="subject" value="<?= isset($_POST["subject"])?$_POST["subject"]:''; ?>"/>
            <span style="color: red"><?= isset($error_subject)? $error_subject : '';?></span>
            <br/>
        </label><br/>
        <label>Сообщение: </label><br/>
        <label>
            <textarea name="message" cols="30" rows="10"><?= isset($_POST["message"])?$_POST["message"]:''; ?></textarea>
            <span style="color: red"><?= isset($error_message)? $error_message : '';?></span>
        </label><br/>
        <input type="submit"  class="btn" name="send" value="Отправить"/>

    </form>



</body>
</html>

