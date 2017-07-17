<?php


namespace Patterns\Observer\Weather;


use Patterns\Observer\Weather\Observers\ObservableInterface;

interface WeatherSubjectInterface
{
    public function getTemperature();

    public function getHumidity();

    public function getPressure();

    public function attach (ObservableInterface $observer);

    public function detach (ObservableInterface $observer);

    public function setMeasurements($temperature, $humidity, $pressure);

    public function notify ();
}