<?php


namespace Patterns\FactoryMethod\Factory;


use Patterns\FactoryMethod\Transport\TransportInterface;

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