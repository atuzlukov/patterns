<?php


namespace Patterns\Builder\Pizza\Builders;


use Patterns\Builder\Pizza\Products\Pizza;

abstract class PizzaBuilderAbstract
{
    protected $ingredients = [];

    public function addCheese($cheese)
    {
        array_push($this->ingredients, 'Сыр: ' . $cheese);

        return $this;
    }

    public function addSouse($souse)
    {
        array_push($this->ingredients, 'Соус: ' . $souse);

        return $this;
    }

    public function addMeat($meat)
    {
        array_push($this->ingredients, 'Мясо: ' . $meat);

        return $this;
    }

    protected function clear()
    {
        $this->ingredients = [];
    }

    abstract public function getPizza(): Pizza;


}