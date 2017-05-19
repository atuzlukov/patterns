<?php


namespace Patterns\Builder\Car\Products;


use Patterns\Builder\Car\Components\Computer;
use Patterns\Builder\Car\Components\Engine;
use Patterns\Builder\Car\Components\Navigator;
use Patterns\Builder\Car\Components\Transmission;

abstract class ProductAbstract
{

    protected $type, $seats, $engine, $transmission, $computer, $navigator;

    /**
     * ProductAbstract constructor.
     * @param $type CarTypeEnum
     * @param $seats int
     * @param $engine Engine
     * @param $transmission Transmission
     * @param $computer Computer
     * @param $navigator Navigator
     */
    public function __construct($type, $seats, $engine, $transmission, $computer, $navigator){
        $this->type = $type;
        $this->seats = $seats;
        $this->engine = $engine;
        $this->transmission = $transmission;
        $this->computer = $computer;
        $this->navigator = $navigator;
    }

    abstract public function make();
}