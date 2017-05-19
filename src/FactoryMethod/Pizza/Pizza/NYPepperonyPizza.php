<?php


namespace Patterns\FactoryMethod\Pizza\Pizza;


class NYPepperonyPizza extends PizzaAbstract
{

    public function __construct()
    {
        $this->name = 'Пепперони из ньюйорка';
        $this->dough = 'Толстое тесто';
        $this->sauce = 'Кетчуп';

        $this->ingredients[] = 'Пепперони';
        $this->ingredients[] = 'Перец';
        $this->ingredients[] = 'Мясо';
    }
}