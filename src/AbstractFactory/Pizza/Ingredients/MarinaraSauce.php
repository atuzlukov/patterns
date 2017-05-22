<?php


namespace Patterns\AbstractFactory\Pizza\Ingredients;


class MarinaraSauce implements SauceInterface
{

    public function create()
    {
        return 'Моцарелла';
    }
}