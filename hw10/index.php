<?php
//Написати програму на PHP, яка використовує генератор для створення послідовності чисел Фібоначчі,
//які менші за певне значення, передане в функцію.

/**
 * A generator that generates Fibonacci numbers no greater than the specified value.
 * @param int $max
 * @return Generator
 */
function generateFibonacciNumbers(int $max): Generator
{
    $nMinus2 = 0;
    $nMinus1 = 1;
    while ($nMinus2 <= $max){
        yield $nMinus2;
        [$nMinus2, $nMinus1] = [$nMinus1, $nMinus2 + $nMinus1];
    }
}

foreach (generateFibonacciNumbers(1198) as $number) {
    echo $number . PHP_EOL;
}


