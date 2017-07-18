<?php


namespace Patterns\Facade\Cinema;


class Dvd
{
    public function on()
    {
        echo 'Dvd включен <br>';
    }

    public function off()
    {
        echo 'Dvd выключен <br>';
    }

    public function play()
    {
        echo 'Начать воспроизведение <br>';
    }

}