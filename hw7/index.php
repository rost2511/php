<?php
//Написати програму на PHP, яка містить іменовану функцію, що приймає три аргументи:
//два обовʼязкових типу int і третій необовʼязковий типу closure
//Функція має повертати результат множення першого і другого аргументів,
//а в разі передачі третього аргументу (анонімної функції), перед return має викликати анонімну функції і передати в неї результат обчислення.
//Реалізувати аноннімну функцію, яка виводить на екран переданий аргумент.


echo "Введите первое число" . PHP_EOL;
$firstNumber = (int)fgets(STDIN);
echo "Введите второе число" . PHP_EOL;
$secondNumber = (int)fgets(STDIN);

/**
 * Anonymous function that will display the argument passed to it
 * @param int $arg
 * @return void
 */
$anonymousFunction = function (int $arg): void {
    echo "Аргумент анонимной функции = $arg" . PHP_EOL;
};

/**
 * The function takes 2 required numeric arguments and one optional one (an anonymous function) and returns the result of multiplying the first two arguments.
 * If an anonymous function is also passed, then pass the result of multiplying 2 numbers as an argument and display it on the screen before returning
 * @param int $firstNumber
 * @param int $secondNumber
 * @param closure|null $anonymousFunction
 * @return int
 */
function multiplication(int $firstNumber, int $secondNumber, ?closure $anonymousFunction = null): int
{
    $result = $firstNumber * $secondNumber;

    if ($anonymousFunction) {
        $anonymousFunction($result);
    }

    return $result;
}

//echo multiplication($firstNumber, $secondNumber) . PHP_EOL;
echo multiplication($firstNumber, $secondNumber, $anonymousFunction) . PHP_EOL;