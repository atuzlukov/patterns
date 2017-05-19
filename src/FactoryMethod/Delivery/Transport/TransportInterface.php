<?php

namespace Patterns\FactoryMethod\Delivery\Transport;

interface TransportInterface
{
    public function move();

    public function distance();
}