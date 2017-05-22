<?php


namespace Patterns\AbstractFactory\Pizza\Ingredients;


class Mozzarella implements CheeseInterface
{

    public function create()
    {
        return 'Моцарелла';
    }
}