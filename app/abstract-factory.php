<?php
use Patterns\AbstractFactory\Factories\IkeaFactory;
use Patterns\AbstractFactory\Factories\LazuritFactory;
use Patterns\AbstractFactory\Furniture;

include_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$context = strlen($_GET['context']) ?  trim($_GET['context']) : 'ikea';

if($context == 'ikea'){
    $factory = new IkeaFactory();

} elseif ($context == 'lazurit'){
    $factory = new LazuritFactory();
} else {
    throw new \Exception('factory not found');
}

$furniture = new Furniture($factory);

$furniture->get();

