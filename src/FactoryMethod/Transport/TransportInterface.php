<?php

namespace Patterns\FactoryMethod\Transport;

interface TransportInterface
{
    public function move();

    public function distance();
}