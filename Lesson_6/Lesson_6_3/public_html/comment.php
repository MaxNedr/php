<?php


/**
 * начальная страница сайта
 */

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';


// var_dump($_POST);
// вывод шаблона
echo render('site/comment');


?>
