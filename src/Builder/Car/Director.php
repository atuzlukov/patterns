<?php


namespace Patterns\Builder\Car;

use Patterns\Builder\Car\Builders\Builder;
use Patterns\Builder\Car\Components\Computer;
use Patterns\Builder\Car\Components\Engine;
use Patterns\Builder\Car\Components\Navigator;
use Patterns\Builder\Car\Components\Transmission;
use Patterns\Builder\Car\Products\CarTypeEnum;
use Patterns\Builder\Car\Products\ProductAbstract;


class Director
{
    public function constructSportsCar(Builder $builder): ProductAbstract
    {
        $builder->setType(new CarTypeEnum(CarTypeEnum::SPORTS_CAR));
        $builder->setSeats(2);
        $builder->setEngine(new Engine(3.0));
        $builder->setTransmission(new Transmission(Transmission::SEMI_AUTOMATIC));
        $builder->setComputer(new Computer());
        $builder->setNavigator(new Navigator());

        return $builder->get();
    }

    public function constructCityCar(Builder $builder): ProductAbstract
    {
        $builder->setType(new CarTypeEnum(CarTypeEnum::CITY_CAR));
        $builder->setSeats(4);
        $builder->setEngine(new Engine(1.2));
        $builder->setTransmission(new Transmission(Transmission::AUTOMATIC));
        $builder->setComputer(new Computer());
        $builder->setNavigator(new Navigator());

        return $builder->get();
    }

    public function constructSUV(Builder $builder): ProductAbstract
    {
        $builder->setType(new CarTypeEnum(CarTypeEnum::SUV));
        $builder->setSeats(6);
        $builder->setEngine(new Engine(2.5));
        $builder->setTransmission(new Transmission(Transmission::MANUAL));
        $builder->setComputer(new Computer());
        $builder->setNavigator(new Navigator());

        return $builder->get();
    }


}