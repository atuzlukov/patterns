<?php


namespace Patterns\AbstractFactory\Pizza\Pizza;


use Patterns\AbstractFactory\Pizza\PizzaIngredientFactoryInterface;

abstract class PizzaAbstract implements PizzaInterface
{
    protected $ingredients;

    public function __construct(PizzaIngredientFactoryInterface $ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function cut()
    {
        return 'Порезали пиццу';
    }

    public function box()
    {
        return 'Упаковали пиццу';
    }

    public function bake()
    {
        return 'Выпекли пиццу';
    }

}