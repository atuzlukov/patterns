<?php


namespace Patterns\TemplateMethod\Coffee;


abstract class AbstractBeverage
{
    /**
     * Процесс приготовления напитка
     */
    final public function prepare()
    {
        $this->beforePrepare();
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    /**
     * Операция зацепка
     */
    protected function beforePrepare()
    {
        // .... hook
    }

    protected function boilWater()
    {
        echo 'Вскипятить воду <br>';
    }

    protected function pourInCup()
    {
        echo 'Перелить в чашку <br>';
    }

    abstract protected function brew();

    abstract protected function addCondiments();

}