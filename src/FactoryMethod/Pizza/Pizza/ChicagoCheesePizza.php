<?php


namespace Patterns\FactoryMethod\Pizza\Pizza;


class ChicagoCheesePizza extends PizzaAbstract
{

    public function __construct()
    {
        $this->name = 'Сырная пицца из Чикаго';
        $this->dough = 'Тонкое тесто';
        $this->sauce = 'Соус маринара';

        $this->ingredients[] = 'Сыр';
        $this->ingredients[] = 'Колбаса';
        $this->ingredients[] = 'Оливки';
        $this->ingredients[] = 'Лук';
    }

    public function cut()
    {
        return 'Порезали пиццу квадратиками';
    }
}