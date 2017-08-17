<?php


namespace Patterns\TemplateMethod\Coffee;


class Coffee extends AbstractBeverage
{

    protected function brew()
    {
        echo 'Заварить кофе <br>';
    }

    protected function addCondiments()
    {
        echo 'Добавить молоко и сахар <br>';
    }
}