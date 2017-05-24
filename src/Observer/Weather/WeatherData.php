<?php


namespace Patterns\Observer\Weather;


use Patterns\Observer\Weather\Observers\ObservableInterface;

class WeatherData implements WeatherSubjectInterface
{

    /**
     * @var \SplObjectStorage|WeatherSubjectInterface[]
     */
    private $observers;
    private $temperature, $humidity, $pressure;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach (ObservableInterface $observer)
    {
        if (!$this->observers->offsetExists($observer)) {
            $this->observers->attach($observer);
        } else {
            throw new \RuntimeException('You are already subscribed');
        }
    }

    public function detach(ObservableInterface $observer)
    {
        if ($this->observers->offsetExists($observer)) {
            $this->observers->detach($observer);
        } else {
            throw new \RuntimeException('You are not subscribed');
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->notify();
    }

    /**
     * @return mixed
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @return mixed
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * @return mixed
     */
    public function getPressure()
    {
        return $this->pressure;
    }
}