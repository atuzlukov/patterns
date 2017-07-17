<?php


namespace Patterns\Command\Remote\Commands;


use Patterns\Command\Remote\Device\Light;

class LightOffCommand implements CommandInterface
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        return $this->light->off();
    }

    public function undo()
    {
        return $this->light->on();
    }
}