<?php


namespace Patterns\AbstractFactory;


use Patterns\AbstractFactory\Factories\IkeaFactory;
use Patterns\AbstractFactory\Factories\LazuritFactory;

class FurnitureController
{
    public function getFurniture()
    {
        if($_SERVER['HTTP_HOST'] == 'ikea.ru'){
            $factory = new IkeaFactory();

        } elseif ($_SERVER['HTTP_HOST'] == 'lazurit.ru'){
            $factory = new LazuritFactory();
        } else {
            throw new \Exception('factory not found');
        }

        return new Furniture($factory);
    }

    public function execute()
    {
        $this->getFurniture()->get();
    }
}