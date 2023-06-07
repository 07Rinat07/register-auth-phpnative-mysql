<?php

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_SPECIAL_CHARS);

$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_SPECIAL_CHARS);

$pass = md5($pass."jyjyvv35641");

$mysql = new mysqli('localhost', 'root', '', 'registerDB');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");

$user = $result->fetch_assoc();
if (count($user) == 0) {
    echo "Такого пользователя нет в базе данных сайта";
    exit();
}

setcookie('user', $user['name'], time() + 3600 * 24 * 360, "/");

$mysql->close();

header('Location: /');


