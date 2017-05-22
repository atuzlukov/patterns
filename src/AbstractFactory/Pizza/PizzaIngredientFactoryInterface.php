<?php


namespace Patterns\AbstractFactory\Pizza;


use Patterns\AbstractFactory\Pizza\Ingredients\CheeseInterface;
use Patterns\AbstractFactory\Pizza\Ingredients\ClamInterface;
use Patterns\AbstractFactory\Pizza\Ingredients\DoughInterface;
use Patterns\AbstractFactory\Pizza\Ingredients\PepperonyInterface;
use Patterns\AbstractFactory\Pizza\Ingredients\SauceInterface;
use Patterns\AbstractFactory\Pizza\Ingredients\VegetableInterface;

interface PizzaIngredientFactoryInterface
{
    public function createDough(): DoughInterface;

    public function createSauce(): SauceInterface;

    public function createCheese(): CheeseInterface;

    public function createClam(): ClamInterface;

    public function createVeggie(): VegetableInterface;

    public function createPepperony(): PepperonyInterface;
}