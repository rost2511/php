<?php
//Написати програму на PHP, яка порівнює різні типи даних(цілі числа, рядки, логічні значення та інші)
// за допомогою операторів суворого і несуворого порівняння та виводить результат порівняння на екран.
//
//В програмі потрібно використати мінімум п'ять різних типів даних та мінімум по два порівняння (з використанням суворого та несуворого порівняння).
//
//Використати приведення типів і повторити суворе і несуворе порівняння

$bool = true;
$bool2 = false;
$int = 1;
$int2 = 0;
$float = 1.5;
$float2 = 1.8;
$string = '1';
$string2 = '0';
$null = null;


var_dump($bool == $int);
var_dump($bool === $int);

var_dump($bool == $float);
var_dump($bool === $float);

var_dump($int == $float);
var_dump($int === $float);

var_dump($int == $string);
var_dump($int === $string);

var_dump($null == $string2);
var_dump($null === $string2);

var_dump($null == $int2);
var_dump($null === $int2);

var_dump($int2 == $bool2);
var_dump($int2 === $bool2);

var_dump($int3 == $float2);
var_dump($int3 === $float2);

var_dump($int2 == (int)$bool2);
var_dump($int2 === (int)$bool2);

var_dump((bool)$int2 == $bool2);
var_dump((bool)$int2 === $bool2);

var_dump((string)$int == $string);
var_dump((string)$int === $string);

var_dump((string)$null == $string2);
var_dump((string)$null === $string2);

var_dump($null == (bool)$string2);
var_dump($null === (bool)$string2);

var_dump($int == (integer)$float2);
var_dump($int === (integer)$float2);
