<?php


namespace Patterns\Builder\Car\Builders;


use Patterns\Builder\Car\Products\Manual;

class ManualBuilder extends Builder
{

    function get()
    {
        return new Manual($this->type, $this->seats, $this->engine, $this->transmission, $this->computer, $this->navigator);
    }
}