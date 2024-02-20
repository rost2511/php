<?php
//Створити клас який має одну властивість $text зі значенням "some text" маленькими літерами і один метод print(),
//який виводить $this->text із заглавної літери ("Some text")
//Після цього віднаслідуйтесь від батьківського класу і перезавантажте метод print(),
//щоб він виводив $this->text великими літерами ("SOME TEXT")

define('CLASSES_DIR', __DIR__ . '/classes/');

require CLASSES_DIR . 'Text.php';
require CLASSES_DIR . 'Text2.php';

$text = new Text;
$text2 = new Text2;

$text->print();
echo "\n";
$text2->print();
echo "\n";