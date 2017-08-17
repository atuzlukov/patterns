<?php


class CoffeeTest extends \PHPUnit\Framework\TestCase
{
    public function testPrepareCoffee()
    {
        $this->expectOutputString('Вскипятить воду <br>Заварить кофе <br>Перелить в чашку <br>Добавить молоко и сахар <br>');

        $coffee = new \Patterns\TemplateMethod\Coffee\Coffee();

        $coffee->prepare();
    }
}