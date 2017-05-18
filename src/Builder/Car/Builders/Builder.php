<?php


namespace Patterns\Builder\Car\Builders;


use Patterns\Builder\Car\Components\Computer;
use Patterns\Builder\Car\Components\Engine;
use Patterns\Builder\Car\Components\Navigator;
use Patterns\Builder\Car\Components\Transmission;
use Patterns\Builder\Car\Products\CarTypeEnum;

abstract class Builder
{
    protected $type, $seats, $engine, $transmission, $computer, $navigator;

    public function setType(CarTypeEnum $type)
    {
        $this->type = $type;

        return $this;
    }

    public function setSeats(int $seats)
    {
        $this->seats = $seats;

        return $this;
    }

    public function setEngine(Engine $engine)
    {
        $this->engine = $engine;

        return $this;
    }

    public function setTransmission(Transmission $transmission)
    {
        $this->transmission = $transmission;

        return $this;
    }

    public function setComputer(Computer $computer)
    {
        $this->computer = $computer;

        return $this;
    }

    public function setNavigator(Navigator $navigator)
    {
        $this->navigator = $navigator;

        return $this;
    }

    abstract function get();



}