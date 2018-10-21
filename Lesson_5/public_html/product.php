<?php

/**
 * начальная страница сайта
 */

// поключаем конфигурации приложения
require '../config/main.php';
// функции для работы с базой данных
include '../engine/database.php';
countView($_GET['id']);
$product = getItem("select * from `product` WHERE id={$_GET['id']}");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Товар</title>
    <style>
        .galleryWrapper__screen {
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #222;
            opacity: 0.8;
            position: fixed;
            top: 0;
            z-index: 100;
            display: block;
            text-align: center;
        }

        .galleryWrapper__image {
            max-height: 80%;
            max-width: 80%;
            z-index: 101;
            position: absolute;
            margin: auto;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
        }

        .galleryWrapper__close {
            z-index: 101;
            position: absolute;
            top: 0;
            right: 0;
        }

        .arrows {
            display: flex;
            position: relative;
            align-content: center;
            justify-content: space-between;
            width: auto;
            height: 50px;

        }

        .arrows__left {
            z-index: 102;
            position: absolute;
            top: -110px;
            left: 20px;
            width: 50px;
            height: 50px;
            color: red;
            font-size: 60px;
            font-weight: bolder;
            cursor: pointer;
        }

        .arrows__right {
            z-index: 102;
            position: absolute;
            top: -110px;
            right: 20px;
            width: 50px;
            height: 50px;
            color: red;
            font-size: 60px;
            font-weight: bolder;
            cursor: pointer;
        }

        .small_image {
            width: 250px;
            height: 200px;
            transition: ease-in-out 0.5s;
        }

        .small_image:hover {

            transform: scale3d(1.1, 1.1, 1.1);
        }
        .big_image {
            max-width: 80%;
            max-height: 80%;
    </style>
<!--    <script src="js/js.js"></script>-->
</head>
<body>

<div class="product">
    <?php
    echo "<img src=\"$product[url]\" class='big_image'> \n";
    echo "<p>Количество просмотров: </p>" . $product['count_view'];
    echo "<p>Цена: </p>".$product['price']
    ?>
</div>


</body>
</html>