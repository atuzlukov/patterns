<?php


namespace Patterns\TemplateMethod\Coffee;


class Tea extends AbstractBeverage
{

    public function brew()
    {
        echo 'Заварить чай <br>';
    }

    public function addCondiments()
    {
        echo 'Добавить лимон <br>';
    }

    public function beforePrepare()
    {
        echo 'Приготовить чайный сервиз <br>';
    }
}