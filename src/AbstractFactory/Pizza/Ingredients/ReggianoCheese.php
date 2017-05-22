<?php


namespace Patterns\AbstractFactory\Pizza\Ingredients;


class ReggianoCheese implements CheeseInterface
{

    public function create()
    {
        return 'Сыр Реджанино';
    }
}