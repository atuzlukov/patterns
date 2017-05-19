<?php


namespace Patterns\FactoryMethod\Pizza\Pizza;


interface PizzaInterface
{
    public function __construct();

    public function prepare();

    public function bake();

    public function cut();

    public function box();
}