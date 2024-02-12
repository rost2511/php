<?php
//Написати програму на PHP, яка виводить на екран назву кольору в залежності від стану змінної $value
//Залежності значення змінної і кольору:
//- 1 - green
//- 2 - red
//- 3 - blue
//- 4 - brown
//- 5 - violet
//- 6 - black
//Всі інші значення мають виводити white

$value = 5;

if (1 === $value) {
    echo 'green' . PHP_EOL;
} elseif (2 === $value) {
    echo 'red' . PHP_EOL;
} elseif (3 === $value) {
    echo 'blue' . PHP_EOL;
} elseif (4 === $value) {
    echo 'brown' . PHP_EOL;
} elseif (5 === $value) {
    echo 'violet' . PHP_EOL;
} elseif (6 === $value) {
    echo 'black' . PHP_EOL;
} else {
    echo 'white' . PHP_EOL;
}

$value2 = 3;

switch ($value2) {
    case 1:
        echo 'green' . PHP_EOL;
        break;
    case 2:
        echo 'red' . PHP_EOL;
        break;
    case 3:
        echo 'blue' . PHP_EOL;
        break;
    case 4:
        echo 'brown' . PHP_EOL;
        break;
    case 5:
        echo 'violet' . PHP_EOL;
        break;
    case 6:
        echo 'black' . PHP_EOL;
        break;
    default:
        echo 'white' . PHP_EOL;
}

$value3 = 2;

$color = match ($value3) {
    1 => 'green',
    2 => 'red',
    3 => 'blue',
    4 => 'brown',
    5 => 'violet',
    6 => 'black',
    default => 'white',
};

echo $color . PHP_EOL;
