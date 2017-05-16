<?php


namespace Patterns\AbstractFactory\Tables;


class DinnerTable implements TableInterface
{

    public function make()
    {
        echo 'Обеденный стол<br/>';
    }
}