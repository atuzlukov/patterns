<?php


namespace Patterns\FactoryMethod\Pizza\Store;


use Patterns\FactoryMethod\Pizza\Pizza\ChicagoCheesePizza;
use Patterns\FactoryMethod\Pizza\Pizza\ChicagoClamPizza;
use Patterns\FactoryMethod\Pizza\Pizza\ChicagoPepperonyPizza;
use Patterns\FactoryMethod\Pizza\Pizza\ChicagoVeggiePizza;
use Patterns\FactoryMethod\Pizza\Pizza\PizzaInterface;

class ChicagoPizzaStore extends PizzaStore
{

    /**
     * Фабричный метод
     *
     * @param string $type
     * @return PizzaInterface
     */
    public function createPizza(string $type): PizzaInterface
    {
        switch ($type){
            case 'cheese':
                $pizza = new ChicagoCheesePizza();
                break;
            case 'pepperony':
                $pizza = new ChicagoPepperonyPizza();
                break;
            case 'clam':
                $pizza = new ChicagoClamPizza();
                break;
            case 'veggie':
                $pizza = new ChicagoVeggiePizza();
                break;
            default:
                throw new \InvalidArgumentException('type not found');
                break;
        }

        return $pizza;
    }
}