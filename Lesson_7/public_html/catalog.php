<?php
// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';


//var_dump($_POST['buy']);
//var_dump($_GET);
//var_dump($_SESSION);
//var_dump($_COOKIE);
//var_dump($checkCart);

if (isset($_GET['id'])) {
    echo render('catalog/product_view', [
        'product' => getItem("SELECT * FROM `product` WHERE id={$_GET['id']}")
    ]);
} else {

   if (isset($_GET['addToCart'])){
       addItem($_GET['addToCart']);
   }
    echo render('catalog/products_all_view', [
         'products' => getItemArray("SELECT * FROM `product`")
     ]);
}
function addItem($id_product) {
    if ($_SESSION['cart'][$id_product]) { //
        $_SESSION['cart'][$id_product] += 1;
    } else {
        $_SESSION['cart'][$id_product] = 1;
    }
}

/*if (isset($_POST['buy'])) {
    $content = $_POST['buy'];
    $contentVal = intval($_POST['buy']);
    $checkCart = getItem("SELECT * FROM cart WHERE id_product={$contentVal}");
    $sql = "insert into cart (id_product,count_product) value ('{$content}','1')";
    $countUpdate = "UPDATE cart SET count_product=count_product+1 WHERE id_product={$contentVal}";
    if (!$checkCart) {

        if (!empty($content) && execute($sql)) {
            header("Location: /catalog.php");
        } else {
            $error = 'Что-то пошло не так!';
        }
    }else{
        execute($countUpdate);
        header("Location: /catalog.php");
    }
}*/



