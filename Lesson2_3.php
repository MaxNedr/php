<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.10.2018
 * Time: 21:27
 */
/**
 * @param $a number Первое слогаемое
 * @param $b number Второе слогаемое
 * @return number сумма двух слагаемых
 */
    function getSum($a, $b) {
        return $a + $b;

    }

/**
 * @param $a number Уменьшаемое
 * @param $b number Вычитаемое
 * @return number Разность двух агрументов
 */
    function getDifference($a, $b) {
        return $a - $b;
    }

/**
 * @param $a number Множимое
 * @param $b number Множитель
 * @return number Произведение двух аргументов
 */
    function getMultiplication($a, $b) {
        return $a * $b;
    }

/**
 * @param $a number Делимое
 * @param $b number Делитель
 * @return number Частное, результат деления двух указанных агрументов
 */
    function getDivide($a, $b) {
        return $a / $b;
    }