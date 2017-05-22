<?php


namespace Patterns\FactoryMethod\Pizza\Store;


use Patterns\FactoryMethod\Pizza\Pizza\NYCheesePizza;
use Patterns\FactoryMethod\Pizza\Pizza\NYClamPizza;
use Patterns\FactoryMethod\Pizza\Pizza\NYPepperonyPizza;
use Patterns\FactoryMethod\Pizza\Pizza\NYVeggiePizza;
use Patterns\FactoryMethod\Pizza\Pizza\PizzaInterface;

class NYPizzaStore extends PizzaStore
{

    /**
     * Фабричный метод
     *
     * @param string $type
     * @return PizzaInterface
     */
    protected function createPizza(string $type): PizzaInterface
    {
        switch ($type){
            case 'cheese':
                $pizza = new NYCheesePizza();
                break;
            case 'pepperony':
                $pizza = new NYPepperonyPizza();
                break;
            case 'clam':
                $pizza = new NYClamPizza();
                break;
            case 'veggie':
                $pizza = new NYVeggiePizza();
                break;
            default:
                throw new \InvalidArgumentException('type not found');
                break;
        }

        return $pizza;
    }
}