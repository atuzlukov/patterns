<?php


namespace Patterns\FactoryMethod\Pizza\Pizza;


class ChicagoClamPizza extends PizzaAbstract
{

    public function __construct()
    {
        $this->name = 'Пицца с морепродуктами из Чикаго';
        $this->dough = 'Тонкое тесто';
        $this->sauce = 'Соус терияки';

        $this->ingredients[] = 'Креветки';
        $this->ingredients[] = 'Мидии';
        $this->ingredients[] = 'Осьминоги';
    }
}