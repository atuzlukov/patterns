<?php


namespace Patterns\AbstractFactory\Furniture\Tables;


class DinnerTable implements TableInterface
{

    public function make()
    {
        echo 'Обеденный стол<br/>';
    }
}