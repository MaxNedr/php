<?php
// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

echo render('cart/cart',['productsInCart' => getItemArray("SELECT * FROM `product`")]);