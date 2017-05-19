<?php


namespace Patterns\FactoryMethod\Pizza\Pizza;


class NYClamPizza extends PizzaAbstract
{

    public function __construct()
    {
        $this->name = 'Пицца с морепродуктами из ньюйорка';
        $this->dough = 'Толстое тесто';
        $this->sauce = 'Соус терияки';

        $this->ingredients[] = 'Креветки';
        $this->ingredients[] = 'Мидии';
        $this->ingredients[] = 'Осьминоги';
    }
}