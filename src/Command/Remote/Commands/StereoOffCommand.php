<?php


namespace Patterns\Command\Remote\Commands;


use Patterns\Command\Remote\Device\Stereo;

class StereoOffCommand implements CommandInterface
{
    private $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        return $this->stereo->off();
    }

    public function undo()
    {
        return $this->stereo->on() . $this->stereo->setCD() . $this->stereo->setVolume(11);
    }
}