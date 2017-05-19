<?php


namespace Patterns\SimpleFactory\Factories;


use Patterns\SimpleFactory\Pizza\PizzaInterface;

/**
 * Интерфейс предполагает, что в последствие могут появиться другие фабрики, которые будут возвращать
 * объекты пиццы, которые, например производятся в разных городах
 *
 * Interface FactoryInterface
 * @package Patterns\SimpleFactory\Factories
 */
interface FactoryInterface
{
    public function createPizza(string $type): PizzaInterface;
}