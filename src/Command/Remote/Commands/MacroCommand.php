<?php


namespace Patterns\Command\Remote\Commands;


class MacroCommand implements CommandInterface
{

    /**
     * @var CommandInterface[]
     */
    private $commands;

    public function __construct(array $commands)
    {
        foreach ($commands as $command) {
            if (!$command instanceof CommandInterface) {
                throw new \InvalidArgumentException('Wrong command type');
            }
        }

        $this->commands = $commands;
    }

    public function execute()
    {
        $result = '';

        foreach ($this->commands as $command) {
            $result .= $command->execute();
        }

        return $result;
    }

    public function undo()
    {
        $result = '';

        foreach ($this->commands as $command) {
            $result .= $command->undo();
        }

        return $result;
    }
}