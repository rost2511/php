<?php
//Написати програму на PHP, яка реалізує клас для роботи зі списком завдань. Завдання мають зберігатися у файлі. Клас повинен мати наступні методи:
//addTask($taskName, $priority) - метод, який додає завдання з назвою $taskName та пріоритетом $priority до списку завдань.
//deleteTask($taskId) - метод, який видаляє завдання зі списку за ідентифікатором $taskId.
//getTasks() - метод, який повертає всі завдання зі списку відсортовані за пріоритетом в порядку спадання.
//completeTask($taskId) - метод, який відмічає завдання з ідентифікатором $taskId як виконане.
//Також програма повинна мати перелічення (enumeration) для можливих станів завдання: "виконано", "не виконано".
//Для реалізації треба використати роботу з масивами, циклами та умовними операторами,
//програма має зберігати список завдань у файлі та зчитувати його з файлу при кожному запуску програми, щоб зберегти дані між сеансами роботи.

//В конструкторе если файл существует забираем в массив таски из файла и работаем с ним
//В деструкторе перезаписываем файл
//Или в каждом методе вызывать перезаписывание файла
//uniqid - уникальный id
//айди|название таски|приоритет|статус
//через эксплоуд разбивать по разделителю

define('DIR', __DIR__ . '/');
define('CLASSES_DIR', __DIR__ . '/classes/');
define('ENUMS_DIR', __DIR__ . '/enums/');

require CLASSES_DIR . 'Task.php';

try {
    $toDo1 = new Task('/var/www/html/hw13/todolists/todo1.txt');
//    $toDo1->addTask('3333 task', 6);
//    try {
//        $toDo1->deleteTask('65d36f086a5ba');
//    } catch (Exception $exception) {
//        echo "Exception: " . $exception->getMessage();
//    }
//    $toDo1->addTask('123123 task', 9);
//    $toDo1->completeTask('65d36f08b60cd');
//    print_r($toDo1->getTasks());
} catch (Exception $exception) {
    echo "Exception: " . $exception->getMessage();
}

try {
    $toDo2 = new Task('/var/www/html/hw13/todolists/todo2.txt');
//    $toDo2->addTask('1234567 task', 2);
//    var_dump($toDo2->getTasks());;
//    $toDo2->completeTask('65d36cc51ba04');
} catch (Exception $exception) {
    echo "Exception: " . $exception->getMessage();
}