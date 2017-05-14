<?php


namespace Patterns\FactoryMethod\Factory;


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