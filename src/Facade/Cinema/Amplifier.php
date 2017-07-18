<?php


namespace Patterns\Facade\Cinema;


class Amplifier
{
    public function on()
    {
        echo 'Усилитель включен <br>';
    }

    public function off()
    {
        echo 'Усилитель выключен <br>';
    }

    public function setCD()
    {
        echo 'Установлен CD <br>';
    }

    public function setDVD()
    {
        echo 'Установлен DVD <br>';
    }

    public function setVolume($vol)
    {
        echo 'Уровень громкости - ' . $vol . ' <br>';
    }

    public function setSurround()
    {
        echo 'Включен звук вокруг <br>';
    }
}