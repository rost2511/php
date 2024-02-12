<?php
//Напишіть програму яка перевіряє довжину рядка.
//Якщо рядок більше 20 символів то треба перевірити чи цей рядок складається з декількох речень і якщо так,
//то вирізати з рядку перше речення, якщо ні вивести на екран повідомлення що рядок має 1 речення.

$string = 'Hi, nice to meet you. I’m still learning English, so please speak slowly.';

$dotPosition = stripos($string, '.');
$stringLength = strlen($string);

//--------- Первый вариант ---------

if (!$dotPosition) {                                                    // проверка на наличие точки в строке
    echo 'There are no dots in your sentence - rewrite it!' . PHP_EOL;
} elseif ($stringLength > 20) {                                         // проверяем длину строки
    if ($dotPosition < ($stringLength - 1)) {                           // проверяем не находится ли первая точка в конце строки
        echo substr($string, ($dotPosition + 2)) . PHP_EOL;             // +2 тк вырезаю и пробел после точки
    } else {
        echo 'Only one sentence per line' . PHP_EOL;
    }
} else {
    echo 'This sentence has less than 20 characters' . PHP_EOL;
}

//--------- Второй вариант ---------

switch (true) {
    case !$dotPosition:
        echo 'There are no dots in your sentence - rewrite it!' . PHP_EOL;
        break;
    case (strlen($string) > 20) && ($dotPosition < ($stringLength - 1)):
        echo substr($string, ($dotPosition + 2)) . PHP_EOL;
        break;
    case (strlen($string) > 20) && ($dotPosition === ($stringLength - 1)):
        echo 'Only one sentence per line' . PHP_EOL;
        break;
    default:
        echo 'This sentence has less than 20 characters' . PHP_EOL;
}

//--------- Третий вариант ---------

$result2 = match (true) {
    !$dotPosition => 'There are no dots in your sentence - rewrite it!' . PHP_EOL,
    (strlen($string) > 20) && ($dotPosition < ($stringLength - 1)) => substr($string, ($dotPosition + 2)) . PHP_EOL,
    (strlen($string) > 20) && ($dotPosition === ($stringLength - 1)) => 'Only one sentence per line' . PHP_EOL,
    default => 'This sentence has less than 20 characters' . PHP_EOL,
};

echo $result2;



