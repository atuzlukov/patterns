<?php


namespace Patterns\FactoryMethod;


use Patterns\FactoryMethod\Factory\LocalDelivery;
use Patterns\FactoryMethod\Factory\WorldwideDelivery;

class DeliveryController
{
    public function getLocation()
    {
        return 'current location';
    }

    public function execute()
    {
        $location = $this->getLocation();

        if ($location == 'local'){
            $delivery = new LocalDelivery();
        } elseif ($location == 'world'){
            $delivery = new WorldwideDelivery();
        } else {
            throw new \Exception('Delivery for your location not found');
        }

        $delivery->deliver();
    }
}