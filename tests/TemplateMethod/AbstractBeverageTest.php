<?php


use Patterns\TemplateMethod\Coffee\AbstractBeverage;

class AbstractBeverageTest extends \PHPUnit\Framework\TestCase
{
    public function testTemplateMethod()
    {
        $beverage = $this->getMockBuilder(AbstractBeverage::class)
            ->setMethods(['brew', 'addCondiments', 'pourInCup', 'boilWater', 'beforePrepare'])
            ->getMock();

        $beverage->expects($this->once())
            ->method('brew');

        $beverage->expects($this->once())
            ->method('addCondiments');

        $beverage->expects($this->once())
            ->method('boilWater');

        $beverage->expects($this->once())
            ->method('pourInCup');

        $beverage->expects($this->once())
            ->method('beforePrepare');

        $beverage->prepare();
    }

    public function testBoilWater()
    {
        $this->expectOutputString('Вскипятить воду <br>');

        $beverage = $this->getMockForAbstractClass(AbstractBeverage::class);

        $method = new ReflectionMethod(
            AbstractBeverage::class, 'boilWater'
        );

        $method->setAccessible(true);

        $method->invoke($beverage);
    }

    public function testPourInCup()
    {
        $this->expectOutputString('Перелить в чашку <br>');

        $beverage = $this->getMockForAbstractClass(AbstractBeverage::class);

        $method = new ReflectionMethod(
            AbstractBeverage::class, 'pourInCup'
        );

        $method->setAccessible(true);

        $method->invoke($beverage);

    }

    public function testBeforePrepare()
    {
        $beverage = $this->getMockForAbstractClass(AbstractBeverage::class);

        $method = new ReflectionMethod(
            AbstractBeverage::class, 'beforePrepare'
        );

        $method->setAccessible(true);

        $this->assertNull($method->invoke($beverage));
    }
}