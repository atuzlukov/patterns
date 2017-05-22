<?php


namespace Patterns\AbstractFactory\Pizza\Pizza;


class PepperonyPizza extends PizzaAbstract
{

    public function prepare()
    {
        $result = $this->ingredients->createDough()->create()
            . $this->ingredients->createCheese()->create()
            . $this->ingredients->createSauce()->create()
            . $this->ingredients->createPepperony()->create();

        return $result;
    }

}