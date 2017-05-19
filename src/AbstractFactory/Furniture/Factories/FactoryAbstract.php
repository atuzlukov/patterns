<?php


namespace Patterns\AbstractFactory\Furniture\Factories;



use Patterns\AbstractFactory\Furniture\Chairs\ChairInterface;
use Patterns\AbstractFactory\Furniture\Tables\TableInterface;

abstract class FactoryAbstract
{
    /**
     * @return TableInterface
     */
    abstract public function createTable();

    /**
     * @return ChairInterface
     */
    abstract public function createChair();
}