<?php

use Patterns\Builder\Products\Car;

include_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$director = new \Patterns\Builder\Director();

$cityCarBuilder = $director->constructCityCar();

$cityCar = new Car($cityCarBuilder);

$cityCar->make();

$manualCityCar = new \Patterns\Builder\Products\Manual($cityCarBuilder);

$manualCityCar->make();