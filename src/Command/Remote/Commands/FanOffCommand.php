<?php


namespace Patterns\Command\Remote\Commands;


use Patterns\Command\Remote\Device\Fan;

class FanOffCommand implements CommandInterface
{
    private $fan;
    private $prevSpeed;

    public function __construct(Fan $fan)
    {
        $this->fan = $fan;
    }

    public function execute()
    {
        $this->prevSpeed = $this->fan->getSpeed();
        return $this->fan->off();
    }

    public function undo()
    {
        if($this->prevSpeed == Fan::OFF){
            return $this->fan->off();
        } elseif ($this->prevSpeed == Fan::LOW) {
            return $this->fan->low();
        } elseif ($this->prevSpeed == Fan::MEDIUM) {
            return $this->fan->medium();
        } elseif ($this->prevSpeed == Fan::HIGH) {
            return $this->fan->high();
        }
        return null;
    }
}