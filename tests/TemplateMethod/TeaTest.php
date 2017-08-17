<?php


class TeaTest extends \PHPUnit\Framework\TestCase
{
    public function testPrepareTea()
    {
        $this->expectOutputString('Приготовить чайный сервиз <br>Вскипятить воду <br>Заварить чай <br>Перелить в чашку <br>Добавить лимон <br>');

        $tea = new \Patterns\TemplateMethod\Coffee\Tea();

        $tea->prepare();
    }
}