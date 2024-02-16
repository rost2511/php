<?php
//Створити клас Worker. Має дві властивості: ім'я та посада.
//При встановлені властивостей треба додати перевірки на ім'я (не менше 2 символів)
//та на посаду (має бути одним із значень manager, developer, tester).
//Також створити метод для виводу на екран інформації про робітника, в ньому мають виводитись ім'я та посада.
//Створити об'єкт класу та викликати його метод для відображення інформації

define('DIR', __DIR__ . '/');
define('CLASSES_DIR', __DIR__ . '/classes/');

require CLASSES_DIR . 'Worker.php';

try {
    $newWorker = new Worker('Andrij', 'manager');
    echo $newWorker->printWorkerProperties() . PHP_EOL;
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}

try {
    $newWorker2 = new Worker('Andrij', 'Manager');
    echo $newWorker2->printWorkerProperties() . PHP_EOL;
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}