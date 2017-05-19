<?php


namespace Patterns\AbstractFactory\Furniture\Chairs;


class WoodChair implements ChairInterface
{

    public function make()
    {
        echo 'Деревянный кухонный стул<br/>';
    }
}