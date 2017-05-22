<?php


namespace Patterns\AbstractFactory\Pizza\Ingredients;


class ThinCrustDough implements DoughInterface
{

    public function create()
    {
        return 'Тонкое тесто';
    }
}