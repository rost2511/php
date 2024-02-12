<?php
//Написати консольну програму на PHP, яка робить кілька дій:
//
//- запитує імʼя і виводить в консоль кілька рядків привітання по імені
//
//- приймає кілька числових аргументів і виводить їх суму та середне арифметичне

echo "Hello, what's your name?" . PHP_EOL;

$name = trim(fgets(STDIN));

echo "Hello $name!" . PHP_EOL;
echo "Bonjour $name!" . PHP_EOL;
echo "Hallo $name!" . PHP_EOL;

echo "Сколько чисел будем обрабатывать?" . PHP_EOL;

$countNumbers = (int)fgets(STDIN);

if (0 === $countNumbers || 1 === $countNumbers) {
    echo "И что тут суммировать?" . PHP_EOL;
} else {
    $sum = 0;
    for ($i = 0; $i < $countNumbers; $i++) {
        echo "Введите число номер " . ($i + 1) . " : ";
        $sum += (int)fgets(STDIN);
    }
    $aver = $sum / $i;
    echo "Сумма Ваших чисел $sum" . PHP_EOL;
    echo "Среднее арифметическое Ваших чисел $aver" . PHP_EOL;
}
