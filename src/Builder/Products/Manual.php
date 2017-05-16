<?php


namespace Patterns\Builder\Products;


class Manual extends ProductAbstract
{

    public function make()
    {
        echo 'Инструкция: ' . $this->builder->getType() . ' с компьютером ' . $this->builder->getComputer()->getName() . '<br/>';
    }
}