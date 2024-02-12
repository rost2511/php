<?php
//Написати програму на PHP, яка створює масив із випадкових чисел та:
//- знаходить найбільший та найменший елемент масиву
//- сортує масив та виводить його у відсортованому вигляді

/**
 * Function to generate a numeric array
 * @param int $count
 * @param int $min
 * @param int $max
 * @return array
 */
function randArray(int $count = 10, int $min = 0, int $max = 10): array
{
    $array = [];
    for ($i = 0; $i < $count; $i++) {
        $array[$i] = rand($min, $max);
    }
    return $array;
}

/**
 * Function to find the minimum number in an array
 * @param array $array
 * @return int
 */
function arrayMin(array $array): int
{
    $min = $array[0];
    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value;
        }
    }
    return $min;
}

/**
 * Function to find the maximum number in an array
 * @param array $array
 * @return int
 */
function arrayMax(array $array): int
{
    $max = $array[0];
    foreach ($array as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
    return $max;
}

$array = randArray(5, 1, 20);
var_dump($array);
echo "Min number - " . arrayMin($array) . PHP_EOL;
echo "Max number - " . arrayMax($array) . PHP_EOL;
sort($array);
var_dump($array);
rsort($array);
var_dump($array);
