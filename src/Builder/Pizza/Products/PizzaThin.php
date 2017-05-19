<?php


namespace Patterns\Builder\Pizza\Products;


class PizzaThin extends Pizza
{

    public function makeDough()
    {
        return 'Тонкое тесто';
    }
}