<?php

use Patterns\AbstractFactory\Pizza\Store\ChicagoPizzaStore;
use Patterns\AbstractFactory\Pizza\Store\NYPizzaStore;

include_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

(new ChicagoPizzaStore())->orderPizza('cheese');

echo "<br>";
echo "<br>";
echo "<br>";

(new NYPizzaStore())->orderPizza('clam');


