<?php


namespace Patterns\AbstractFactory\Pizza;


use Patterns\AbstractFactory\Pizza\Ingredients\CheeseInterface;
use Patterns\AbstractFactory\Pizza\Ingredients\ClamInterface;
use Patterns\AbstractFactory\Pizza\Ingredients\DoughInterface;
use Patterns\AbstractFactory\Pizza\Ingredients\FrozenClam;
use Patterns\AbstractFactory\Pizza\Ingredients\Onion;
use Patterns\AbstractFactory\Pizza\Ingredients\PepperonyInterface;
use Patterns\AbstractFactory\Pizza\Ingredients\PlumTomatoSauce;
use Patterns\AbstractFactory\Pizza\Ingredients\ReggianoCheese;
use Patterns\AbstractFactory\Pizza\Ingredients\SauceInterface;
use Patterns\AbstractFactory\Pizza\Ingredients\SlicedPepperony;
use Patterns\AbstractFactory\Pizza\Ingredients\ThinCrustDough;
use Patterns\AbstractFactory\Pizza\Ingredients\VegetableInterface;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactoryInterface
{

    public function createDough(): DoughInterface
    {
        return new ThinCrustDough();
    }

    public function createSauce(): SauceInterface
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): CheeseInterface
    {
        return new ReggianoCheese();
    }

    public function createClam(): ClamInterface
    {
        return new FrozenClam();
    }

    public function createVeggie(): VegetableInterface
    {
        return new Onion();
    }

    public function createPepperony(): PepperonyInterface
    {
        return new SlicedPepperony();
    }
}