<?php


namespace Patterns\AbstractFactory\Pizza\Ingredients;


class ThickCrustDough implements DoughInterface
{

    public function create()
    {
        return 'Толстое тесто';
    }
}