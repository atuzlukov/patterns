<?php


namespace Patterns\SimpleFactory\Pizza;


class PepperonyPizza extends PizzaAbstract
{

    public function prepare()
    {
        return 'Добавили колбасу';
    }

}