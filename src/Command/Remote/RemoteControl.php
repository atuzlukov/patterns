<?php


namespace Patterns\Command\Remote;


use Patterns\Command\Remote\Commands\CommandInterface;

class RemoteControl
{
    /**
     * @var CommandInterface[]
     */
    private $onCommands = [];
    /**
     * @var CommandInterface[]
     */
    private $offCommands = [];

    /**
     * @var CommandInterface
     */
    private $lastCommand;

    public function setCommand($code, CommandInterface $onCommand, CommandInterface $offCommand)
    {
        $this->onCommands[$code] = $onCommand;
        $this->offCommands[$code] = $offCommand;
    }

    public function onButtonPush($code)
    {
        if (array_key_exists($code, $this->onCommands)) {
            $this->lastCommand = $this->onCommands[$code];
            return $this->onCommands[$code]->execute();
        } else {
            throw new \InvalidArgumentException('Button code not found');
        }

    }

    public function offButtonPush($code)
    {
        if (array_key_exists($code, $this->offCommands)) {
            $this->lastCommand = $this->offCommands[$code];
            return $this->offCommands[$code]->execute();
        } else {
            throw new \InvalidArgumentException('Button code not found');
        }
    }

    public function undoButtonPush()
    {
        if($this->lastCommand){
            return $this->lastCommand->undo();
        } else {
            throw new \InvalidArgumentException('Button code not found');
        }
    }


}