<?php


namespace Patterns\AbstractFactory\Pizza\Ingredients;


class Onion implements VegetableInterface
{

    public function name()
    {
        return 'Лук';
    }
}