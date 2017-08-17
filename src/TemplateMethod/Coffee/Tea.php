<?php


namespace Patterns\TemplateMethod\Coffee;


class Tea extends AbstractBeverage
{

    protected function brew()
    {
        echo 'Заварить чай <br>';
    }

    protected function addCondiments()
    {
        echo 'Добавить лимон <br>';
    }

    protected function beforePrepare()
    {
        echo 'Приготовить чайный сервиз <br>';
    }
}