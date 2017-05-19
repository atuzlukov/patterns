<?php


namespace Patterns\SimpleFactory\Factories;


use Patterns\SimpleFactory\Pizza\CheesePizza;
use Patterns\SimpleFactory\Pizza\ClamPizza;
use Patterns\SimpleFactory\Pizza\PepperonyPizza;
use Patterns\SimpleFactory\Pizza\PizzaInterface;
use Patterns\SimpleFactory\Pizza\VeggiePizza;
use Prophecy\Exception\InvalidArgumentException;

class SimplePizzaFactory implements FactoryInterface
{
    /**
     * Простая фабрика
     *
     * Теоретически можно определить этот метод статическим, но тогда теряется возможноть субклассирования и изменения поведения метода
     *
     * @param string $type
     * @return PizzaInterface
     */
    public function createPizza(string $type): PizzaInterface
    {

        switch ($type){
            case 'cheese':
                $pizza = new CheesePizza();
                break;
            case 'pepperony':
                $pizza = new PepperonyPizza();
                break;
            case 'clam':
                $pizza = new ClamPizza();
                break;
            case 'veggie':
                $pizza = new VeggiePizza();
                break;
            default:
                throw new InvalidArgumentException('type not found');
                break;
        }

        return $pizza;

    }
}