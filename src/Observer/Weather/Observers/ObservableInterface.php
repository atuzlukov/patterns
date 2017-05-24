<?php


namespace Patterns\Observer\Weather\Observers;


use Patterns\Observer\Weather\WeatherSubjectInterface;

interface ObservableInterface
{
    public function update(WeatherSubjectInterface $subject);
}