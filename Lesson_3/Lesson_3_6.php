<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.10.2018
 * Time: 9:51
 */
/*6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. Необходимо представить
пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю?
Попробовать его реализовать.*/
$menu = [
    "Главная" => "#index", "Каталог" => "#katalog", "Контакты" => "#kontakty"
];

foreach ($menu as $item => $href) {
    $menu_item = "<li class='menu'><a class='main_menu' href='$href'> $item </a></li>";
    echo $menu_item;
};
?>