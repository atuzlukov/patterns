<?php


namespace Patterns\Builder\Products;


class Car extends ProductAbstract
{

    public function make()
    {
        echo $this->builder->getType() . '<br/>';
    }
}