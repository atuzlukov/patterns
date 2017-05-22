<?php

namespace Patterns\AbstractFactory\Pizza\Store;

use Patterns\AbstractFactory\Pizza\ChicagoPizzaIngredientFactory;
use Patterns\AbstractFactory\Pizza\Pizza\CheesePizza;
use Patterns\AbstractFactory\Pizza\Pizza\ClamPizza;
use Patterns\AbstractFactory\Pizza\Pizza\PepperonyPizza;
use Patterns\AbstractFactory\Pizza\Pizza\VeggiePizza;
use Patterns\AbstractFactory\Pizza\Pizza\PizzaInterface;

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
        $ingredients = new ChicagoPizzaIngredientFactory();

        switch ($type){
            case 'cheese':
                $pizza = new CheesePizza($ingredients);
                break;
            case 'pepperony':
                $pizza = new PepperonyPizza($ingredients);
                break;
            case 'clam':
                $pizza = new ClamPizza($ingredients);
                break;
            case 'veggie':
                $pizza = new VeggiePizza($ingredients);
                break;
            default:
                throw new \InvalidArgumentException('type not found');
                break;
        }

        return $pizza;
    }
}