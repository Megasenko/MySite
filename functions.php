<?php
session_start();

// база данных товаров

function getGoods()
{
    $goods = [];
    $goods = [
        0 => ["title" => "Радиатор", "content" => "Радиатор отопителя", "img" => "img/radiator.jpg", "price"=>'1000'],
        1 => ["title" => "Зеркало", "content" => "Зеркало заднего вида", "img" => "img/miror.jpg", "price"=>'300'],
        2 => ["title" => "Ступица", "content" => "Ступица левая", "img" => "img/stupica.jpeg", "price"=>1500],
        3 => ["title" => "Суппорт", "content" => "Суппорт правый", "img" => "img/suport.JPG", "price"=>'600'],
        4 => ["title" => "Тормозной диск", "content" => "Тормозной диск передний левый", "img" => "img/break.jpg", "price"=>'400']
    ];
    return $goods;
}
// база данных зарегистрированных пользователей

const LOGIN = 'test';
const PASSWORD = 'test';
const ADMINEMAIL='exempleEmail@admin.com';

// логинизация на сайт

function login(array $post)
{
    $PASSWORD_HASH = md5(PASSWORD);
    $check = null;
    if (isset($post['login']) && isset($post['password']) && strlen($post['email']) !== 0) {
        if (htmlspecialchars($post['login']) == LOGIN && md5(htmlspecialchars($post['password'])) === $PASSWORD_HASH) {
            $check = true;
        }
    }

    if ($check) {
        $_SESSION['access'] = true;
        $_SESSION['login'] = htmlspecialchars($post['login']);
        $_SESSION['email'] = htmlspecialchars($post['email']);
        header('Location: /goods.php');
        exit;
    }else {
        $_SESSION['access'] = false;
        header('Location: /access_denied.php');
        exit;
    }
}

// Оправка письма обратной связи

if (isset($_POST["send"])) {
    $from = htmlspecialchars($_POST["from"]);
    $to = ADMINEMAIL;
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);
    $_SESSION["from"] = $from;
    $_SESSION["to"] = $to;
    $_SESSION["subject"] = $subject;
    $_SESSION["message"] = $message;
    $error_from = "";
    $error_to = "";
    $error_subject = "";
    $error_message = "";
    $error = false;
    if ($from == "" || !preg_match("/@/", $from)) {
        $error_from = "Введите корректный email";
        $error = true;
    }
    if (strlen($subject) == 0) {
        $error_subject = "Введите тему сообщения";
        $error = true;
    }
    if (strlen($message) == 0) {
        $error_message = "Введите  сообщение";
        $error = true;
    }
    if(!$error){
        $subject="=?utf-8?B?".base64_encode($subject)."?=";
        $headers="From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
        mail($to,$subject,$message,$headers);
        header("Location:/redirect1.php?good=2");
        exit;
    }
}

// Оправка заказа админу

if (isset($_POST["order"])) {
    $to = ADMINEMAIL;
    $title = htmlspecialchars($_POST["title"]);
    $price = htmlspecialchars($_POST["price"]);
    $content = htmlspecialchars($_POST["content"]);
    $from = $_SESSION["email"];
    $_SESSION["to"] = $to;
    $_SESSION["title"] = $title;
    $_SESSION["price"] = $price;
    $_SESSION["content"] = $content;

    if(isset($_SESSION["email"]) && isset($_SESSION["to"]) && isset($_SESSION["title"]) && isset($_SESSION["price"]) && isset($_SESSION["content"])){
        $headers="From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
        $subjectOrder='Заказ с сайта';
        $messageOrder="Заказ: $title\r\n$content\r\n$price";
        mail($to,$subjectOrder,$messageOrder,$headers);
        header("Location:/redirect2.php?good=3");
        exit;
    }
}



