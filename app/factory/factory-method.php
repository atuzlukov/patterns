<?php


use Patterns\FactoryMethod\Delivery\Factory\LocalDelivery;
use Patterns\FactoryMethod\Delivery\Factory\WorldwideDelivery;

include_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$location = strlen($_GET['location']) ? trim($_GET['location']) : 'local';

if ($location == 'local'){
    $delivery = new LocalDelivery();
} elseif ($location == 'world'){
    $delivery = new WorldwideDelivery();
} else {
    throw new \Exception('Delivery for your location not found');
}

echo 'Delivery by ';
$delivery->deliver();
