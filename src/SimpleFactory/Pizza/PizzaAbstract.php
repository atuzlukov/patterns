<?php


namespace Patterns\SimpleFactory\Pizza;


abstract class PizzaAbstract implements PizzaInterface
{
    public function cut()
    {
        return 'Порезали пиццу';
    }

    public function box()
    {
        return 'Упаковали пиццу';
    }

    public function bake()
    {
        return 'Выпекли пиццу';
    }
}