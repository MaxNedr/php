<?php
// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

echo render('user/newUser');

if (isset($_POST['reg_user'])) {

    $login = $_POST['new-login'];
    $password = $_POST['new-password'];
    $passwordAgain = $_POST['new-password-again'];
    $findUser = getItem("SELECT * FROM users where login='{$login}'");
    echo($login);
    if ($password !== $passwordAgain || $password == null || $passwordAgain == null) {
        echo 'ПАРОЛЬ Ошибка';
        $login = null;
    } else {
        if ($findUser && $findUser !== null) {
            echo 'Логин занят ';
            $login = null;
        } elseif ($findUser && $findUser == null || empty($login)) {
            echo 'Логин пуст';
            $login = null;
        } else {
            $sql = "insert into users(login, password) value('$login','$password')";
           execute($sql);
            header('Location: user/newUser');
        }

    }

}
