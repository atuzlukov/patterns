<?php


namespace Patterns\AbstractFactory\Pizza\Pizza;


class VeggiePizza extends PizzaAbstract
{

    public function prepare()
    {
        $result = $this->ingredients->createDough()->create()
            . $this->ingredients->createCheese()->create()
            . $this->ingredients->createSauce()->create()
            . $this->ingredients->createVeggie()->name();

        return $result;
    }

}