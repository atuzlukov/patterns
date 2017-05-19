<?php


use Patterns\Builder\Car\Builders\CarBuilder;
use Patterns\Builder\Car\Builders\ManualBuilder;

include_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$director = new \Patterns\Builder\Car\Director();

$cityCarBuilder = new CarBuilder();
$cityCar = $director->constructCityCar($cityCarBuilder);

$cityCar->make();

$manualCarBuilder = new ManualBuilder();
$manualSUV = $director->constructSUV($manualCarBuilder);

$manualSUV->make();
