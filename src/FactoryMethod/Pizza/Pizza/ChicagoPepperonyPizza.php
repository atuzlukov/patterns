<?php


namespace Patterns\FactoryMethod\Pizza\Pizza;


class ChicagoPepperonyPizza extends PizzaAbstract
{

    public function __construct()
    {
        $this->name = 'Пепперони из Чикаго';
        $this->dough = 'Тонкое тесто';
        $this->sauce = 'Кетчуп';

        $this->ingredients[] = 'Пепперони';
        $this->ingredients[] = 'Перец';
        $this->ingredients[] = 'Мясо';
    }
}