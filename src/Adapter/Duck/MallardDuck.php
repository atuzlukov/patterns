<?php


namespace Patterns\Adapter\Duck;


class MallardDuck implements Duck
{

    public function fly()
    {
        return 'Утка летает';
    }

    public function quack()
    {
        return 'Уточка Кря кря';
    }
}