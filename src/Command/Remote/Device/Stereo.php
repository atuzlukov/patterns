<?php


namespace Patterns\Command\Remote\Device;


class Stereo
{
    private $volume;

    public function on()
    {
        return 'Магнитола включена';
    }

    public function off()
    {
        return 'Магнитола выключена';
    }

    public function setCD()
    {
        return 'Вставлен CD диск';
    }

    public function setDVD()
    {
        return 'Вставлен DVD диск';
    }

    public function setRadio()
    {
        return 'Радио влючено';
    }

    public function setVolume($volume)
    {
        $this->volume = $volume;
        return 'Громкость ' . $this->volume;
    }
}