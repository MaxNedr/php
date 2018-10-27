<?php
// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

//var_dump($_POST);
var_dump($_SESSION);
//var_dump($_COOKIE);


if (isset($_GET['id'])) {
    echo render('catalog/product_view', [
        'product' => getItem("SELECT * FROM `product` WHERE id={$_GET['id']}")
    ]);
} else {
    echo render('catalog/products_all_view', [
        'products' => getItemArray("SELECT * FROM `product`")
    ]);
}

if (isset($_POST['buy'])){
    header('Location: catalog.php');
}
