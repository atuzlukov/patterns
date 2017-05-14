<?php


namespace Patterns\AbstractFactory\Factories;


use Patterns\AbstractFactory\Chairs\ChairInterface;
use Patterns\AbstractFactory\Chairs\SteelChair;
use Patterns\AbstractFactory\Tables\DinnerTable;
use Patterns\AbstractFactory\Tables\TableInterface;

class IkeaFactory extends FactoryAbstract
{

    /**
     * @return TableInterface
     */
    public function createTable()
    {
        return new DinnerTable();
    }

    /**
     * @return ChairInterface
     */
    public function createChair()
    {
        return new SteelChair();
    }
}