<?php


namespace Patterns\FactoryMethod\Delivery\Transport;



class Ship implements TransportInterface
{

    public function move()
    {
        echo 'ship <br />';
    }

    public function distance()
    {
        echo '100 000 km <br />';
    }
}