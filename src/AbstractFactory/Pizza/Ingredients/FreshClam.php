<?php


namespace Patterns\AbstractFactory\Pizza\Ingredients;


class FreshClam implements ClamInterface
{

    public function get()
    {
        return 'Свежие молюски';
    }
}