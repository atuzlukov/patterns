<?php

use Patterns\Observer\Weather\Observers\CurrentConditionsDisplay;
use Patterns\Observer\Weather\WeatherData;

include_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$weatherData = new WeatherData();

$curConditions = new CurrentConditionsDisplay();

$weatherData->attach($curConditions);

$weatherData->setMeasurements(1,2,3);
$weatherData->setMeasurements(3,10,59);
