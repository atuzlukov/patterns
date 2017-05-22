<?php


namespace Patterns\AbstractFactory\Pizza\Ingredients;


class FrozenClam implements ClamInterface
{

    public function get()
    {
        return 'Замороженные моллюски';
    }
}