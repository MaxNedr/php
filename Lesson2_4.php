<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.10.2018
 * Time: 21:27
 */

mathOperation(535, 436, "+");

/**
 * @param $arg1 number Первый аргумент
 * @param $arg2 number Второй аргумент
 * @param $operation string Операция между аргументами
 * @return number Результат вычисления
 */

function mathOperation( int $arg1, int $arg2, $operation)
{

    switch ($operation) {
        case "plus":
        case "+":
        echo getSum($arg1, $arg2);
            break;
        case "minus":
        case "-":
        echo getDifference($arg1, $arg2);
            break;
        case "multiply":
        case "*":
        echo getMultiplication($arg1, $arg2);
            break;
        case "divide":
        case "/":
        echo getDivide($arg1, $arg2);
            break;
    }

}


/**
 * @param $a number Первое слогаемое
 * @param $b number Второе слогаемое
 * @return number сумма двух слагаемых
 */
function getSum($a, $b)
{
    return $a + $b;

}

/**
 * @param $a number Уменьшаемое
 * @param $b number Вычитаемое
 * @return number Разность двух агрументов
 */
function getDifference($a, $b)
{
    return $a - $b;
}

/**
 * @param $a number Множимое
 * @param $b number Множитель
 * @return number Произведение двух аргументов
 */
function getMultiplication($a, $b)
{
    return $a * $b;
}

/**
 * @param $a number Делимое
 * @param $b number Делитель
 * @return number Частное, результат деления двух указанных агрументов
 */
function getDivide($a, $b)
{
    return $a / $b;
}
