<?php


namespace Patterns\FactoryMethod\Pizza\Pizza;


class NYVeggiePizza extends PizzaAbstract
{

    public function __construct()
    {
        $this->name = 'Вегеторианская из ньюйорка';
        $this->dough = 'Толстое тесто';
        $this->sauce = 'Оливковое масло';

        $this->ingredients[] = 'Перец';
        $this->ingredients[] = 'Огурец';
        $this->ingredients[] = 'Помидор';
    }
}