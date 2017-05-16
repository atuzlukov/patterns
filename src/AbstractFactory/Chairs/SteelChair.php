<?php


namespace Patterns\AbstractFactory\Chairs;


class SteelChair implements ChairInterface
{

    public function make()
    {
        echo 'Железный стул для пикника<br/>';
    }
}