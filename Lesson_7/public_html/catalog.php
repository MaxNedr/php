<?php

require '../config/main.php';
require '../engine/core.php';


if (isset($_GET['id'])) {
    echo render('catalog/product_view', [
        'product' => getItem("SELECT * FROM `product` WHERE id={$_GET['id']}")
    ]);
} else {
    echo render('catalog/products_all_view', [
        'products' => getItemArray("SELECT * FROM `product`")
    ]);
}