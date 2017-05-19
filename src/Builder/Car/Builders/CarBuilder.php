<?php


namespace Patterns\Builder\Car\Builders;


use Patterns\Builder\Car\Products\Car;

class CarBuilder extends Builder
{

    function get()
    {
        return new Car($this->type, $this->seats, $this->engine, $this->transmission, $this->computer, $this->navigator);
    }
}