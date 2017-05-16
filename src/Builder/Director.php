<?php


namespace Patterns\Builder;

use Patterns\Builder\Components\Computer;
use Patterns\Builder\Components\Engine;
use Patterns\Builder\Components\Navigator;
use Patterns\Builder\Components\Transmission;
use Patterns\Builder\Products\CarTypeEnum;


class Director
{
    public function constructSportsCar()
    {
        $builder = new Builder();

        $builder->setType(new CarTypeEnum(CarTypeEnum::SPORTS_CAR));
        $builder->setSeats(2);
        $builder->setEngine(new Engine(3.0));
        $builder->setTransmission(new Transmission(Transmission::SEMI_AUTOMATIC));
        $builder->setComputer(new Computer());
        $builder->setNavigator(new Navigator());

        return $builder;
    }

    public function constructCityCar()
    {
        $builder = new Builder();

        $builder->setType(new CarTypeEnum(CarTypeEnum::CITY_CAR));
        $builder->setSeats(4);
        $builder->setEngine(new Engine(1.2));
        $builder->setTransmission(new Transmission(Transmission::AUTOMATIC));
        $builder->setComputer(new Computer());
        $builder->setNavigator(new Navigator());

        return $builder;
    }

    public function constructSUV()
    {
        $builder = new Builder();

        $builder->setType(new CarTypeEnum(CarTypeEnum::SUV));
        $builder->setSeats(6);
        $builder->setEngine(new Engine(2.5));
        $builder->setTransmission(new Transmission(Transmission::MANUAL));
        $builder->setComputer(new Computer());
        $builder->setNavigator(new Navigator());

        return $builder;
    }


}