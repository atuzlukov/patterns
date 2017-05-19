<?php


namespace Patterns\FactoryMethod\Pizza\Pizza;


class ChicagoVeggiePizza extends PizzaAbstract
{

    public function __construct()
    {
        $this->name = 'Вегеторианская из Чикаго';
        $this->dough = 'Тонкое тесто';
        $this->sauce = 'Оливковое масло';

        $this->ingredients[] = 'Перец';
        $this->ingredients[] = 'Огурец';
        $this->ingredients[] = 'Помидор';
    }
}