<?php

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

// страница с формой входа
function login() {
    // редирект если уже авторизован
    if (isLoggedUser()) {
        header("Location: /user.php?action=home");
    }

    // проверка данных из формы
    if (isset($_POST['login_user'])) {
        systemLog($_POST, 'debug');

        $login = $_POST['login'];
        $password = $_POST['password'];

        $findUser = getItem("SELECT * FROM users where login='{$login}'");

        if (isset($findUser)) {
            if ($password == $findUser['password']) {
                if (isset($_POST['remember'])) {
                    loginUser($login, true);
                } else {
                    loginUser($login);
                }

                header("Location: user.php?action=home");
            }
        }
    }

    echo render('user/login');
}


function createUser(){
    echo render('user/newUser');

}
function deleteGood($id_product) {
    unset($_SESSION['cart'][$id_product]);
}
function home() {
//Если была нажата кнопка удалить
    if ($_GET['delete']) {
        deleteGood($_GET['delete']);
    }
//Проверка корзины, пуста или нет
    if ($_SESSION['cart']) {
        $filter = join(", ", array_keys($_SESSION['cart']));
        echo render('cart/cart', [
            //выбираем добавленные в корзину товары.
            'productsInCart' => getItemArray("SELECT * FROM `product` WHERE id IN ({$filter})"),
        ]);
    } else {
        echo render('cart/cart', [
            'message' => "Корзина пуста."
        ]);
    }
    //echo render('user/home');
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'login';
}

switch ($action) {
    case 'login':
        login();
        break;
    case 'logout':
        logoutUser();
        break;
    case 'newUser':
        createUser();
        break;
    case 'home':
        home();
        break;
    default:
        header("Location: /");
}