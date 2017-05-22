<?php


namespace Patterns\AbstractFactory\Pizza;


use Patterns\AbstractFactory\Pizza\Ingredients\CheeseInterface;
use Patterns\AbstractFactory\Pizza\Ingredients\ClamInterface;
use Patterns\AbstractFactory\Pizza\Ingredients\DoughInterface;
use Patterns\AbstractFactory\Pizza\Ingredients\FreshClam;
use Patterns\AbstractFactory\Pizza\Ingredients\MarinaraSauce;
use Patterns\AbstractFactory\Pizza\Ingredients\Onion;
use Patterns\AbstractFactory\Pizza\Ingredients\PepperonyInterface;
use Patterns\AbstractFactory\Pizza\Ingredients\ReggianoCheese;
use Patterns\AbstractFactory\Pizza\Ingredients\SauceInterface;
use Patterns\AbstractFactory\Pizza\Ingredients\SlicedPepperony;
use Patterns\AbstractFactory\Pizza\Ingredients\ThickCrustDough;
use Patterns\AbstractFactory\Pizza\Ingredients\VegetableInterface;

class NYPizzaIngredientFactory implements PizzaIngredientFactoryInterface
{

    public function createDough(): DoughInterface
    {
        return new ThickCrustDough();
    }

    public function createSauce(): SauceInterface
    {
        return new MarinaraSauce();
    }

    public function createCheese(): CheeseInterface
    {
        return new ReggianoCheese();
    }

    public function createClam(): ClamInterface
    {
        return new FreshClam();
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