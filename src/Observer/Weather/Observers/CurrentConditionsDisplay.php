<?php


namespace Patterns\Observer\Weather\Observers;


use Patterns\Observer\Weather\WeatherSubjectInterface;

class CurrentConditionsDisplay implements ObservableInterface, DisplayInterface
{
    private $temperature, $humidity;

    public function update(WeatherSubjectInterface $subject)
    {
        $this->temperature = $subject->getTemperature();
        $this->humidity = $subject->getHumidity();
        $this->display();
    }

    public function display()
    {
        var_dump($this->temperature, $this->humidity);
    }
}