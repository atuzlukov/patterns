<?php

echo 'максимальное целое число: ';
var_dump(PHP_INT_MAX);
echo '<br>';

echo 'минимальное целое число: ';
var_dump(PHP_INT_MIN);
echo '<br>';

echo 'размер целого числа: ';
var_dump(PHP_INT_SIZE);
echo '<br>';

echo 'результат переполнения: ';
$largeInt = PHP_INT_MAX+1;
var_dump($largeInt);
var_dump(intval($largeInt));
echo '<br>';

echo 'Float числа <br>';

var_dump(1/2);
var_dump((int) (1/2));
var_dump(round(1/2));

echo 'Результат сравнения вещественных чисел';
$a = 1.23456789;
$b = 1.23456780;
var_dump($a>$b);

echo 'Работа со строками как с массивами <br>';
$str = 'VeeryLong';

//var_dump($str[]);

$int = 1; var_dump($int[0]);






