<?php


namespace Patterns\AbstractFactory;


use Patterns\AbstractFactory\Factories\FactoryAbstract;

class Furniture
{
    private $chair;
    private $table;

    public function __construct(FactoryAbstract $factory)
    {
        $this->chair = $factory->createChair();
        $this->table = $factory->createTable();
    }

    public function get()
    {
        return $this->chair->make() . $this->table->make();
    }
}