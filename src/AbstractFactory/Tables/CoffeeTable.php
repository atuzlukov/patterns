<?php


namespace Patterns\AbstractFactory\Tables;


class CoffeeTable implements TableInterface
{

    public function make()
    {
        echo 'Журнальный стол<br/>';
    }
}