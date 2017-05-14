<?php


namespace Patterns\AbstractFactory\Factories;


use Patterns\AbstractFactory\Chairs\ChairInterface;
use Patterns\AbstractFactory\Tables\TableInterface;

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