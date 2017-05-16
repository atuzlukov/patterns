<?php


namespace Patterns\Builder;


use Patterns\Builder\Components\Computer;
use Patterns\Builder\Components\Engine;
use Patterns\Builder\Components\Navigator;
use Patterns\Builder\Components\Transmission;
use Patterns\Builder\Products\CarTypeEnum;

class Builder
{
    /**
     * @var CarTypeEnum
     */
    private $type;
    /**
     * @var
     */
    /**
     * @var
     */
    /**
     * @var
     */
    /**
     * @var
     */
    /**
     * @var
     */
    private $seats, $engine, $transmission, $computer, $navigator;

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

    /**
     * @return CarTypeEnum
     */
    public function getType()
    {
        return $this->type->getValue();
    }

    /**
     * @return mixed
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * @return mixed
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @return mixed
     */
    public function getTransmission()
    {
        return $this->transmission;
    }

    /**
     * @return Computer
     */
    public function getComputer()
    {
        return $this->computer;
    }

    /**
     * @return mixed
     */
    public function getNavigator()
    {
        return $this->navigator;
    }

}