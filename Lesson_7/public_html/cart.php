<?php
// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';


    echo render('cart/cart', [
        'productsInCart' => getItemArray("SELECT cart.id,cart.count_product,cart.id_product,Product.product_name,Product.price, product.url FROM Cart,Product WHERE cart.id_product = product.id")
    ]);
if (isset($_GET['id'])){
    $id = (isset($_GET['id'])) ? intval($_GET['id']) : 0;
   if ($id) {
        $sql = "delete from cart where id = {$id}";
        execute($sql);
       header("Location: /cart.php");
   }
}