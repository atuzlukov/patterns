<?php


namespace Patterns\Command\Remote\Device;


class Fan
{
    const HIGH = 3;
    const MEDIUM = 2;
    const LOW = 1;
    const OFF = 1;

    private $speed;

    public function high()
    {
        $this->speed = self::HIGH;
        return 'Скорость ' . $this->getSpeed();
    }

    public function medium()
    {
        $this->speed = self::MEDIUM;
        return 'Скорость ' . $this->getSpeed();
    }

    public function low()
    {
        $this->speed = self::LOW;
        return 'Скорость ' . $this->getSpeed();
    }

    public function off()
    {
        $this->speed = self::OFF;
        return 'Вентилятор выключен';
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }
}