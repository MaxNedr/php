<?php

require '../../engine/core.php';

/**
 * Выводим список категорий
 */
function routeIndex() {
    $cats = getItemArray(
        "select * from category"
    );

    echo render('shop/categories', [
        'cats' => $cats
    ]);
}

/**
 * Выводим список товаров в категории
 */
function routeView() {
    $id = $_GET['id'];

    $prods = getItemArray(
        "select * from product where category_id={$id}"
    );

    echo render('shop/products', [
        'prods' => $prods
    ]);
}


if (isset($_POST['createNewCategory'])){
    $name = $_POST['nameCategory'];
    if (!empty($name)){
        $sql = "Insert into `category`(category_name) value ('{$name}')";
        execute($sql);
    }else{

        echo 'Пусто';
    }

   header('Location: /shop/category.php');
}

function routeDeleteCategory(){
    $id = $_GET['id'];
    $sql = "delete from `category` where id={$id}";
    execute($sql);

}
if (isset($_POST['createNewProduct'])){
    $name = $_POST['nameProduct'];
    $desc = $_POST['descriptionProduct'];
    $price = $_POST['priceProduct'];
    $quantity = $_POST['quantityProduct'];
    $category_id = $_GET['id'];
    $newFilename = $_SERVER['DOCUMENT_ROOT'];
    $uploadInfo = $_FILES['img_file'];
    switch ($uploadInfo['type']) {
        case 'image/jpeg':
            $newFilename1 ='/img/'.$name.'.jpg';
            break;

        case 'image/png':
            $newFilename1 = '/img/'.$name.'.png';
            break;

        default:
            echo 'Файл неподдерживаемого типа';
            exit;
    }

    if (!move_uploaded_file($uploadInfo['tmp_name'], $newFilename.$newFilename1)) {
        echo 'Не удалось осуществить сохранение файла';
    }

    $sql = "insert into `product`(name, description,price,quantity_in_stock, category_id,url_img) value 
('{$name}','{$desc}','{$price}','{$quantity}','{$category_id}','{$newFilename1}')";

    execute($sql);
    header("Location: category.php?action=view&id={$_GET['id']}");

}

route();