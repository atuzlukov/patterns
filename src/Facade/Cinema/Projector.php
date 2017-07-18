<?php


namespace Patterns\Facade\Cinema;


class Projector
{
    public function on()
    {
        echo 'Проектор включен <br>';
    }

    public function wideScreenMode()
    {
        echo 'Развернуть на весь экран <br>';
    }

    public function off(){
        echo 'Проектор выключен <br>';
    }
}