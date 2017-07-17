<?php


namespace Patterns\Command\Remote\Device;


class Light
{
    public function on()
    {
        return 'Свет включен';
    }

    public function off()
    {
        return 'Свет выключен';
    }

}