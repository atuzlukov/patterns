<?php


namespace Patterns\Builder\Pizza\Products;


class PizzaThick extends Pizza
{

    public function makeDough()
    {
        return 'Толстое тесто';
    }
}