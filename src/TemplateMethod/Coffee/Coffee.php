<?php


namespace Patterns\TemplateMethod\Coffee;


class Coffee extends AbstractBeverage
{

    public function brew()
    {
        echo 'Заварить кофе <br>';
    }

    public function addCondiments()
    {
        echo 'Добавить молоко и сахар <br>';
    }
}