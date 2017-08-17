<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$tea = new \Patterns\TemplateMethod\Coffee\Tea();
$coffee = new \Patterns\TemplateMethod\Coffee\Coffee();

echo '<br>';
echo 'Готовим чай <br>';
$tea->prepare();
echo '<br>';
echo 'Готовим кофе <br>';
$coffee->prepare();
