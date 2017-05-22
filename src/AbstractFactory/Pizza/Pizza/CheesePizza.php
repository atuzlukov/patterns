<?php


namespace Patterns\AbstractFactory\Pizza\Pizza;


class CheesePizza extends PizzaAbstract
{

    public function prepare()
    {
        $result = $this->ingredients->createDough()->create()
            . $this->ingredients->createCheese()->create()
            . $this->ingredients->createSauce()->create();

        return $result;
    }

}