<?php

class GoodCode
{
    private int $someNumber = 10;

    public function __construct()
    {
        echo "Hello!";
    }

    public function printSomeNumber(): void
    {
        if (!empty($someNumber)) {
            echo 'Number is: ' . $someNumber;
        } else {
            echo "no number";
        }
    }

    /**
     * Method for adding two numbers
     * @param int|float $a
     * @param int|float $b
     * @return int|float
     */
    public function add_numbers(int|float $a, int|float $b): int|float
    {
        return $a + $b;
    }
}