<?php


namespace Patterns\Command\Remote\Commands;


interface CommandInterface
{
    public function execute();

    public function undo();
}