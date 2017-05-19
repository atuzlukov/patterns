<?php


namespace Patterns\AbstractFactory\Furniture\Factories;



use Patterns\AbstractFactory\Furniture\Chairs\ChairInterface;
use Patterns\AbstractFactory\Furniture\Chairs\WoodChair;
use Patterns\AbstractFactory\Furniture\Tables\CoffeeTable;
use Patterns\AbstractFactory\Furniture\Tables\TableInterface;

class LazuritFactory extends FactoryAbstract
{

    /**
     * @return TableInterface
     */
    public function createTable()
    {
        return new CoffeeTable();
    }

    /**
     * @return ChairInterface
     */
    public function createChair()
    {
        return new WoodChair();
    }
}