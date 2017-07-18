<?php


namespace Patterns\Facade\Cinema;


class HomeTheatreFacade
{
    private $amplifier, $dvd, $pop, $projector, $screen;

    public function __construct(Amplifier $amplifier, Dvd $dvd, PopcornPopper $pop, Projector $projector, Screen $screen)
    {
        $this->amplifier = $amplifier;
        $this->dvd = $dvd;
        $this->pop = $pop;
        $this->projector = $projector;
        $this->screen = $screen;
    }

    public function watchMovie(){
        $this->pop->on();
        $this->pop->pop();
        $this->screen->down();
        $this->projector->on();
        $this->amplifier->on();
        $this->amplifier->setDVD();
        $this->amplifier->setSurround();
        $this->amplifier->setVolume(11);
        $this->dvd->on();
        $this->dvd->play();
        $this->projector->wideScreenMode();
    }

    public function endMovie(){
        $this->pop->off();
        $this->screen->up();
        $this->projector->off();
        $this->amplifier->off();
        $this->dvd->off();
    }
}