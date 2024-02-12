<?php
//1. Написати програму на PHP, яка приймає з консолі аргументи, які введені, і записує їх в файл
//2. Написати іншу програму, яка виводить з файлу логу останні аргументи попередньої програми, які були введені.

define('DIR', __DIR__ . '/');

include_once DIR . 'functions.php';

$consoleString = (string)fgets(STDIN);

//writeLog("Some line", DIR . "logs/logs.txt");
//writeLog("Some line");
//writeLog($consoleString, DIR . "logs/logs2.txt");
writeLog($consoleString);

echo readLastLog();