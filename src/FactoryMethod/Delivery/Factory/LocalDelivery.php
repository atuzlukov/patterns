<?php


namespace Patterns\FactoryMethod\Delivery\Factory;


use Patterns\FactoryMethod\Delivery\Transport\Car;
use Patterns\FactoryMethod\Delivery\Transport\TransportInterface;

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