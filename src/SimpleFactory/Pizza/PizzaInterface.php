<?php


namespace Patterns\SimpleFactory\Pizza;


interface PizzaInterface
{
    public function prepare();

    public function bake();

    public function cut();

    public function box();
}