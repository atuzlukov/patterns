<?php


namespace Patterns\FactoryMethod\Transport;


class Ship implements TransportInterface
{

    public function move()
    {
        echo 'ship is swim <br />';
    }

    public function distance()
    {
        echo '100 000 km <br />';
    }
}