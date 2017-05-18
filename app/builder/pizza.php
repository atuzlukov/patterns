<?php


use Patterns\Builder\Pizza\Builders\PizzaThickBuilder;
use Patterns\Builder\Pizza\Builders\PizzaThinBuilder;
use Patterns\Builder\Pizza\Director;

include_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$director = new Director();
$builderThin = new PizzaThinBuilder();
$builderThick = new PizzaThickBuilder();

$meetPizzaThin = $director->createMeatPizza($builderThin);
$fourCheesePizzaThin = $director->createFourCheesePizza($builderThin);

echo $meetPizzaThin->make();
echo $fourCheesePizzaThin->make();

$meetPizzaThick = $director->createMeatPizza($builderThick);
$fourCheesePizzaThick = $director->createFourCheesePizza($builderThick);

echo $meetPizzaThick->make();
echo $fourCheesePizzaThick->make();
