<?php

use Patterns\SimpleFactory\Factories\SimplePizzaFactory;
use Patterns\SimpleFactory\PizzaStore;

include_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$factory = new SimplePizzaFactory();

$store = new PizzaStore($factory);

$store->orderPizza('cheese');

