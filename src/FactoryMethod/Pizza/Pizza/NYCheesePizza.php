<?php


namespace Patterns\FactoryMethod\Pizza\Pizza;


class NYCheesePizza extends PizzaAbstract
{

    public function __construct()
    {
        $this->name = 'Сырная пицца из ньюйорка';
        $this->dough = 'Толстое тесто';
        $this->sauce = 'Соус маринара';

        $this->ingredients[] = 'Сыр';
        $this->ingredients[] = 'Колбаса';
        $this->ingredients[] = 'Оливки';
        $this->ingredients[] = 'Лук';
    }
}