<?php


namespace Patterns\FactoryMethod\Pizza\Store;



use Patterns\FactoryMethod\Pizza\Pizza\PizzaInterface;

abstract class PizzaStore
{
    /**
     * @param string $type
     * @return PizzaInterface
     */
    public function orderPizza(string $type)
    {
        $pizza = $this->createPizza($type);

        $result = [];

        $result[] = $pizza->prepare();
        $result[] =  $pizza->bake();
        $result[] =  $pizza->cut();
        $result[] =  $pizza->box();

        echo join('<br>', $result);

        return $pizza;
    }

    /**
     * Фабричный метод
     *
     * @param string $type
     * @return PizzaInterface
     */
    abstract public function createPizza(string $type): PizzaInterface;
}