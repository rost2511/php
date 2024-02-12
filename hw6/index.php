<?php
//1. Написати програму на PHP, яка містить користувацьку функцію для обчислення площі кола
//та демонструє використання передачі даних у функцію за допомогою параметрів.

//--- Первый вариант ---

echo "Введите радиус круга в см" . PHP_EOL;
$radius = (float)fgets(STDIN);
/**
 * The function takes the radius of a circle and calculates the area
 * @param int|float $radius
 * @return int|float
 */
function areaOfCircle(int|float $radius): int|float
{
    return 3.14 * ($radius ** 2);
}

echo "Площадь круга при радиусе $radius см - " . areaOfCircle($radius) . " см2" . PHP_EOL;

////--- Второй вариант ---

echo "Введите радиус круга в см" . PHP_EOL;
$radius = (float)fgets(STDIN);
$s = null;
/**
 * The function takes the radius of a circle and the variable s by reference, calculates the area and passes this value to the variable s
 * @param int|float $radius
 * @param $s
 * @return void
 */
function areaOfCircle2(int|float $radius, &$s): void
{
    $s = 3.14 * ($radius ** 2);
}

areaOfCircle2($radius, $s);

echo "Площадь круга при радиусе $radius см - $s см2" . PHP_EOL;

//2. Написати програму на PHP, яка приймає число і підносить його до ступеню
//3. Використайте функцію в двох варіантах: коли вона повертає нове число і змінює передане.

//--- Первый вариант ---

echo "Введите число:" . PHP_EOL;
$number = (int)fgets(STDIN);
echo "Введите степень:" . PHP_EOL;
$power = (int)fgets(STDIN);
/**
 * The function takes 2 variables and raises the first number to a power
 * @param int|float $number
 * @param int $power
 * @return int|float
 */
function numberPower(int|float $number, int $power): int|float
{
    return pow($number, $power);
}

echo "$number в степени $power - " . numberPower($number,$power) . PHP_EOL;

////--- Второй вариант ---

echo "Введите число:" . PHP_EOL;
$number = (int)fgets(STDIN);
echo "Введите степень:" . PHP_EOL;
$power = (int)fgets(STDIN);
$result = null;
/**
 * The function takes 3 variables and raises the first number to a power, writing the result to the result variable
 * @param int|float $number
 * @param int $power
 * @param $result
 * @return void
 */
function numberPower2(int|float $number, int $power, &$result): void
{
    $result = pow($number, $power);
}

numberPower2($number, $power,$result);

echo "$number в степени $power - $result" . PHP_EOL;

