<?php


namespace Patterns\FactoryMethod\Factory;


use Patterns\FactoryMethod\Transport\Car;
use Patterns\FactoryMethod\Transport\TransportInterface;

class LocalDelivery extends DeliveryAbstract
{

    /**
     * @return TransportInterface
     */
    public function getTransport()
    {
        return new Car();
    }
}