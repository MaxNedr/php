<?php
// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

//echo render('cart/cart', ['productsInCart' => getItemArray("SELECT * FROM `product`")]);


    echo render('cart/cart', [
        'productsInCart' => getItemArray("SELECT cart.id,cart.count_product,cart.id_product,Product.product_name,Product.price, product.url FROM Cart,Product WHERE cart.id_product = product.id")
    ]);
