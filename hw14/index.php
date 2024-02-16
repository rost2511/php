<?php
//Створити клас для представлення об'єкту "банківський рахунок", з такими властивостями, як номер рахунку та розмір балансу.
//
//Визначити рівні доступу до властивостей класу за допомогою ключових слів public, protected та private.
//
//Створити публічні методи для отримання та зміни значень властивостей об'єкту, а також методи для здійснення операцій з рахунком,
//таких як поповнення, зняття грошей.
//
//Реалізувати в класі захист від негативних значень балансу рахунку (наприклад, не дозволяйте зняти більше грошей, ніж є на рахунку).
//
//Написати програму, яка використовує клас "банківський рахунок" та його методи для створення об'єктів рахунків,
//встановлення їх властивостей та виконання різних операцій з ними.

define('CLASSES_DIR', __DIR__ . '/classes/');

require CLASSES_DIR . 'BankAccount.php';

//Тут я сделал вложенные try catch тк хотел чтоб можно было выполнять операции и после исключения
try {
    $FirstAccount = new BankAccount(135, 500);
    $FirstAccount->printAccountNumber();
    $FirstAccount->printBalance();
    $FirstAccount->plusMoney(25) . PHP_EOL;
    $FirstAccount->printBalance();

    try {
        $FirstAccount->minusMoney(100) . PHP_EOL;
    } catch (Exception $exception) {
        echo $exception->getMessage() . PHP_EOL;
    }

    $FirstAccount->printBalance();

    try {
        $FirstAccount->minusMoney(500) . PHP_EOL;
    } catch (Exception $exception) {
        echo $exception->getMessage() . PHP_EOL;
    }

    $FirstAccount->printBalance();
    $FirstAccount->plusMoney((10) . PHP_EOL);
    $FirstAccount->printBalance();

} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}

try {
    $SecondAccount = new BankAccount(12, 100);
    $SecondAccount->printAccountNumber();
    $SecondAccount->printBalance();
    $SecondAccount->minusMoney(25) . PHP_EOL;
    $SecondAccount->printBalance();
    $SecondAccount->plusMoney(100) . PHP_EOL;
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}