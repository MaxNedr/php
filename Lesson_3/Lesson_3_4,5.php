<?php

/*4. Объявить массив, индексами которого являются буквы русского языка,
а значениями – соответствующие латинские буквосочетания
(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк.*/
/*$arr = preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY);
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
    $str = implode('', $arr);*/

transliterations("привет че как !! ыадвлпоfs k");

function transliterations($str)
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
        'щ' => 'sch',
        'ъ' => '``',
        'ы' => 'y`',
        'ь' => '``',
        'э' => 'e`',
        'ю' => 'yu',
        'я' => 'ya',
        ' ' => '_',
    ];

    $str = mb_strtolower($str);
    $res = strtr($str, $alphabet);
    echo $res;
}





