<?php


namespace Patterns\Builder\Components;


class Engine
{
    private $volume;

    function __construct($volume)
    {
        $this->volume = $volume;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }
}