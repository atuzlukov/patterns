<?php


namespace Patterns\FactoryMethod\Delivery\Factory;




use Patterns\FactoryMethod\Delivery\Transport\TransportInterface;

abstract class DeliveryAbstract
{

    public function deliver(){
        $transport = $this->getTransport();

        $transport->move();
    }

    /**
     * @return TransportInterface
     */
    abstract public function getTransport();
}