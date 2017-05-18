<?php


namespace Patterns\Builder\Car\Products;


class Car extends ProductAbstract
{

    public function make()
    {
        echo 'Произведен продукт: &laquo;'.$this->type . '&raquo;<br/>';
    }
}