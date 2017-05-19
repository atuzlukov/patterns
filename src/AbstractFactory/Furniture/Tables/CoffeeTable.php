<?php


namespace Patterns\AbstractFactory\Furniture\Tables;


class CoffeeTable implements TableInterface
{

    public function make()
    {
        echo 'Журнальный стол<br/>';
    }
}