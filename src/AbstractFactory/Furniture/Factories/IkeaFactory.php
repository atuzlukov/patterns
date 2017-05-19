<?php


namespace Patterns\AbstractFactory\Furniture\Factories;



use Patterns\AbstractFactory\Furniture\Chairs\ChairInterface;
use Patterns\AbstractFactory\Furniture\Chairs\SteelChair;
use Patterns\AbstractFactory\Furniture\Tables\DinnerTable;
use Patterns\AbstractFactory\Furniture\Tables\TableInterface;

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