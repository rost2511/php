<?php

class Requests
{
    public static function handleRequest(): void
    {
        if ('POST' === $_SERVER['REQUEST_METHOD'] && isset($_POST['first_number']) && isset($_POST['second_number'])) {
            self::handlePostRequest();
        } elseif ('GET' === $_SERVER['REQUEST_METHOD']) {
            self::handleGetRequest();
        }
    }

    private static function handleGetRequest(): void
    {
        echo "Привет, форма отправленна методом Get!";
    }

    private static function handlePostRequest(): void
    {
        $number1 = $_POST['first_number'];
        $number2 = $_POST['second_number'];

        if (is_numeric($number1) && is_numeric($number2)) {
            $sum = $number1 + $number2;
            echo "Сумма чисел $number1 и $number2 равна: $sum";
        } else {
            echo "Ошибка!";
        }
    }
}
