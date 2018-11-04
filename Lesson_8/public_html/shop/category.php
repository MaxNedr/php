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
   // execute($sql);

}

route();