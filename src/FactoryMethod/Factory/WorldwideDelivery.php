<?php


namespace Patterns\FactoryMethod\Factory;


use Patterns\FactoryMethod\Transport\Ship;
use Patterns\FactoryMethod\Transport\TransportInterface;

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