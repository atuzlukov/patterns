<?php


use Patterns\FactoryMethod\Pizza\Store\ChicagoPizzaStore;
use Patterns\FactoryMethod\Pizza\Store\NYPizzaStore;

include_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

(new ChicagoPizzaStore())->orderPizza('cheese');

echo "<br>";
echo "<br>";
echo "<br>";

(new NYPizzaStore())->orderPizza('pepperony');


