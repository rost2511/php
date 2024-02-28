<?php
// Створити кілька класів, які мають спільний функціонал, але не мають спільного предка,
// винести спільну логіку в трейт і підключити його в кожному класі

define('CLASSES_DIR', __DIR__ . '/classes/');
define('TRAITS_DIR', __DIR__ . '/traits/');

require TRAITS_DIR . 'Validation.php';
require CLASSES_DIR . 'User.php';
require CLASSES_DIR . 'Email.php';

$userValidator = new User("Artur");
try {
    print_r($userValidator->checkValidName() . PHP_EOL);
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}

$emailValidator = new Email("test@gmail.com");
try {
    print_r($emailValidator->checkValidEmail() . PHP_EOL);
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}
