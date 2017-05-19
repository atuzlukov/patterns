<?php


namespace Patterns\Builder\Pizza;


use Patterns\Builder\Pizza\Builders\PizzaBuilderAbstract;
use Patterns\Builder\Pizza\Products\Pizza;

class Director
{
    /**
     * @param PizzaBuilderAbstract $builder
     * @return Pizza
     */
    public function createFourCheesePizza(PizzaBuilderAbstract $builder): Pizza
    {
        return $builder
            ->addCheese('russian')
            ->addCheese('filadelfia')
            ->addCheese('gauda')
            ->addCheese('lamber')
            ->getPizza();
    }

    /**
     * @param PizzaBuilderAbstract $builder
     * @return Pizza
     */
    public function createMeatPizza(PizzaBuilderAbstract $builder): Pizza
    {

        return $builder
            ->addMeat('beef')
            ->addSouse('tomato')
            ->addCheese('russian')
            ->getPizza();
    }
}