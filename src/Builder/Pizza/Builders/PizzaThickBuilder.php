<?php


namespace Patterns\Builder\Pizza\Builders;


use Patterns\Builder\Pizza\Products\Pizza;
use Patterns\Builder\Pizza\Products\PizzaThick;

class PizzaThickBuilder extends PizzaBuilderAbstract
{

    public function getPizza(): Pizza
    {
        $pizza = new PizzaThick($this->ingredients);
        $this->clear();

        return $pizza;
    }
}