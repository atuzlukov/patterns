<?php


namespace Patterns\Builder\Car\Products;


class Manual extends ProductAbstract
{

    public function make()
    {
        echo 'Инструкция: ' . $this->type . ' с компьютером ' . $this->computer->getName() . '<br/>';
    }
}