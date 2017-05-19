<?php


namespace Patterns\FactoryMethod\Pizza\Pizza;


abstract class PizzaAbstract implements PizzaInterface
{
    protected $name, $dough, $sauce;
    protected $ingredients = [];

    public function prepare()
    {
        echo 'Готовим пиццу ' . $this->name;
        echo 'Замешиваем тесто ' . $this->dough;
        echo 'Добавляем соус ' . $this->sauce;
        echo 'Добавляем ингредиенты ' . join(', ', $this->ingredients);
    }

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