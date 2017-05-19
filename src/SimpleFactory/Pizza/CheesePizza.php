<?php


namespace Patterns\SimpleFactory\Pizza;


class CheesePizza extends PizzaAbstract
{

    public function prepare()
    {
        return 'Добавили сыр';
    }

}