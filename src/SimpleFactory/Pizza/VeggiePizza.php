<?php


namespace Patterns\SimpleFactory\Pizza;


class VeggiePizza extends PizzaAbstract
{

    public function prepare()
    {
        return 'Добавили сыр, помидоры и сельдерей';
    }

}