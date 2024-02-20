<?php
//Створити абстрактний клас Figure з абстрактними методами area() та perimeter(). Створити нащадки цього класу:
//Rectangle та Circle, які будуть реалізовувати ці методи.
//Кожен з класів повинен мати власні поля (наприклад, довжину, ширину для Rectangle та радіус для Circle)
//та конструктор, який буде ініціалізувати ці поля.
//В конструкторах класів Rectangle та Circle можна додатково використовувати перевірку вхідних даних,
//щоб уникнути створення об'єктів з недопустимими значеннями.
//У класах також можна додати методи, які будуть виводити інформацію про об'єкти:
//getArea() та getPerimeter() для обчислення та виведення значень площі та периметру відповідно.
//В кінці домашнього завдання можна створити екземпляри класів Rectangle та Circle та вивести на екран їхні характеристики
//(наприклад, довжину, ширину та площу для Rectangle, радіус та площу для Circle).

define('CLASSES_DIR', __DIR__ . '/classes/');

require CLASSES_DIR . 'Figure.php';
require CLASSES_DIR . 'Rectangle.php';
require CLASSES_DIR . 'Circle.php';

try {
    $rectangle = new Rectangle(6, 2);
    echo "Rectangle width: " . $rectangle->getWidth() . " sm" . PHP_EOL;
    echo "Rectangle height: " . $rectangle->getHeight() . " sm" . PHP_EOL;
    echo "Rectangle area: " . $rectangle->getArea() . " sm2" . PHP_EOL;
    echo "Rectangle perimeter: " . $rectangle->getPerimeter() . " sm" . PHP_EOL;
} catch (Exception $exception) {
    echo "Exception: " . $exception->getMessage() . PHP_EOL;
}

try {
    $circle = new Circle(10);
    echo "Circle radius: " . $circle->getRadius() . " sm" . PHP_EOL;
    echo "Circle area: " . $circle->getArea() . " sm2" . PHP_EOL;
    echo "Circle perimeter: " . $circle->getPerimeter() . " sm" . PHP_EOL;
} catch (Exception $exception) {
    echo "Exception: " . $exception->getMessage() . PHP_EOL;
}

