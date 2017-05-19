<?php


namespace Patterns\SimpleFactory\Pizza;


class ClamPizza extends PizzaAbstract
{

    public function prepare()
    {
        return 'Добавили морепродукты';
    }

}