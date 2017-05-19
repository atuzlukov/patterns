<?php


namespace Patterns\FactoryMethod\Delivery\Factory;



use Patterns\FactoryMethod\Delivery\Transport\Ship;
use Patterns\FactoryMethod\Delivery\Transport\TransportInterface;

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