<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.10.2018
 * Time: 10:50
 */
/*4. Объявить массив, индексами которого являются буквы русского языка,
а значениями – соответствующие латинские буквосочетания
(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк.*/

$alphabet = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'yo',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'j',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'h',
    'ц' => 'c',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'shh',
    'ъ' => '``',
    'ы' => 'y`',
    'ь' => '``',
    'э' => 'e`',
    'ю' => 'yu',
    'я' => 'ya',
    ' ' => '_',
];

transliterations("maxim Maxxx");

    function transliterations($word)
    {
        $encoding = 'UTF-8';
        $strlen = mb_strlen($word);
        while ($strlen) {
            $array[] = mb_substr($word, 0, 1, $encoding);
            $word = mb_substr($word, 1, $strlen, $encoding);
            $strlen = mb_strlen($word, $encoding);
        }
        return ($array);
    }
//function transliterations($word)
//{
   // $arr = str_split($word);
    //print_r($arr) ;
//}