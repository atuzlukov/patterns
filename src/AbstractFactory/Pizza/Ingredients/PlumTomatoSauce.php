<?php


namespace Patterns\AbstractFactory\Pizza\Ingredients;


class PlumTomatoSauce implements SauceInterface
{

    public function create()
    {
        return 'Сливовый Томатный соус';
    }
}