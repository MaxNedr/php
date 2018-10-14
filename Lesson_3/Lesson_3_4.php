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

transliterations("привет че как дела я хз как но это работает");

function transliterations($word)
{
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
    $arr = preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY);
    $a = 0;
    foreach ($arr as $item) {
        $arrray1 = [];
        $arrray2 = [];
        foreach ($alphabet as $abc => $kirillic) {
            array_push($arrray1, $abc);
            array_push($arrray2, $kirillic);
            $key2 = array_search($item, $arrray1);
            $arr[$a] = $arrray2[$key2];
        }
        $a++;
    }
    $str = implode('', $arr);
    echo $str;
}





