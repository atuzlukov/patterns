<?php


namespace Patterns\AbstractFactory\Furniture\Chairs;


class SteelChair implements ChairInterface
{

    public function make()
    {
        echo 'Железный стул для пикника<br/>';
    }
}