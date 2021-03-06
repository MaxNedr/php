<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.10.2018
 * Time: 10:23
 */
/*Объявить массив, в котором в качестве ключей будут использоваться названия областей,
а в качестве значений – массивы с названиями городов из соответствующей области.
Вывести в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область … (названия городов можно найти на maps.yandex.ru)*/

$regions = [
    "Московская область" => ['Москва', 'Зеленоград', 'Клин'],
    "Ленинградская область" => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    "Рязанская область" => ['Рязань', 'Касимов', 'Ряжск', 'Шацк'],
    "Тульская область" => ['Тула', 'Богородицк', 'Новомосковск', 'Донской'],
];
foreach ($regions as $reg =>$obl) {
    foreach ($obl as $city) {
        echo "{$reg} включает в себя город: {$city}\n";
    }
}