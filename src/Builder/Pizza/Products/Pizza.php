<?php


namespace Patterns\Builder\Pizza\Products;


abstract class Pizza
{
    private $ingredients;
    private $dough;

    public function __construct(array $ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function make()
    {
        $this->dough = $this->makeDough();

        if (empty($this->dough)) {
            throw new \Exception('Пицца не может готовиться без теста');
        }

        return 'Ваша пицца готова: ' . 'Тесто: ' . $this->dough . ' Ингредиенты: ' . join(', ',
                $this->ingredients) . '<br/>';
    }

    abstract public function makeDough();
}