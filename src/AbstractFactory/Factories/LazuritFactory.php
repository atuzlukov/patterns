<?php


namespace Patterns\AbstractFactory\Factories;


use Patterns\AbstractFactory\Chairs\ChairInterface;
use Patterns\AbstractFactory\Chairs\WoodChair;
use Patterns\AbstractFactory\Tables\CoffeeTable;
use Patterns\AbstractFactory\Tables\TableInterface;

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