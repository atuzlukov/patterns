<?php


namespace Patterns\SimpleFactory;


use Patterns\SimpleFactory\Factories\FactoryInterface;

class PizzaStore
{
    private $factory;

    /**
     * PizzaStore constructor.
     * @param FactoryInterface $factory
     */
    function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @param string $type
     * @return Pizza\PizzaInterface
     */
    public function orderPizza(string $type)
    {
        $pizza = $this->factory->createPizza($type);

        $result = [];

        $result[] = $pizza->prepare();
        $result[] =  $pizza->bake();
        $result[] =  $pizza->cut();
        $result[] =  $pizza->box();

        echo join('<br>', $result);

        return $pizza;
    }
}