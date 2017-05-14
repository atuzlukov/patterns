<?php


namespace Patterns\FactoryMethod\Factory;


class WorldwideDelivery extends DeliveryAbstract
{

    /**
     * @return TransportInterface
     */
    public function getTransport()
    {
        return new Ship();
    }
}