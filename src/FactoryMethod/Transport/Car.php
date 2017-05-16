<?php

namespace Patterns\FactoryMethod\Transport;


class Car implements TransportInterface
{

    public function move()
    {
        echo 'car <br />';
    }

    public function distance()
    {
        echo '10 000 km <br />';
    }
}