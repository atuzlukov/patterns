<?php


namespace Patterns\AbstractFactory\Chairs;


class WoodChair implements ChairInterface
{

    public function make()
    {
        echo 'Деревянный кухонный стул<br/>';
    }
}