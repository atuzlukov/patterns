<?php


namespace Patterns\TemplateMethod\Coffee;


abstract class AbstractBeverage
{
    /**
     * Процесс приготовления напитка
     */
    public function prepare()
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
    public function beforePrepare()
    {
        // .... hook
    }

    public function boilWater()
    {
        echo 'Вскипятить воду <br>';
    }

    public function pourInCup()
    {
        echo 'Перелить в чашку <br>';
    }

    abstract public function brew();

    abstract public function addCondiments();

}