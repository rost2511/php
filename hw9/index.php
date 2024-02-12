<?php
//Виведіть на екран всі числа від 1 до 10 використовуючи цикл while
$i = 1;
while ($i <= 10) {
    echo $i . PHP_EOL;
    $i++;
}

//Обчисліть факторіал числа 5 використовуючи цикл while.
/**
 * Function finds the factorial of the entered number
 * @param int $number
 * @return int
 */
function factorial(int $number): int
{
    $product = 1;
    $i = 1;
    while ($i <= $number) {
        $product *= $i;
        $i++;
    }
    return $product;
}

echo "Факториал " . factorial(5) . PHP_EOL;

//Виведіть на екран всі парні числа від 1 до 20 використовуючи цикл while.
/**
 * A function that displays paired numbers from 1 to the number passed to the function
 * @param int $max
 * @return void
 */
function pairedNumbers(int $max): void
{
    $i = 1;
    while ($i <= $max) {
        if (0 === $i % 2) {
            echo $i . PHP_EOL;
        }
        $i++;
    }
}

pairedNumbers(20);