<?php


namespace Patterns\Facade\Cinema;


class PopcornPopper
{
    public function on()
    {
        echo 'Попкорн включен <br>';
    }

    public function pop()
    {
        echo 'Попкорн - начало приготовления <br>';
    }

    public function off()
    {
        echo 'Попкорн выключен <br>';
    }
}