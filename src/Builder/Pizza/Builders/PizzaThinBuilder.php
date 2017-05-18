<?php


namespace Patterns\Builder\Pizza\Builders;


use Patterns\Builder\Pizza\Products\Pizza;
use Patterns\Builder\Pizza\Products\PizzaThin;

class PizzaThinBuilder extends PizzaBuilderAbstract
{

    public function getPizza(): Pizza
    {
        $pizza = new PizzaThin($this->ingredients);
        $this->clear();

        return $pizza;

    }
}