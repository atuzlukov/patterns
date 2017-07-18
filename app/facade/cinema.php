<?php


use Patterns\Facade\Cinema\Amplifier;
use Patterns\Facade\Cinema\Dvd;
use Patterns\Facade\Cinema\PopcornPopper;
use Patterns\Facade\Cinema\Projector;
use Patterns\Facade\Cinema\Screen;

include_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$theatre = new \Patterns\Facade\Cinema\HomeTheatreFacade(new Amplifier(), new Dvd(), new PopcornPopper(), new Projector(), new Screen());

echo 'Начать просмотр <br> <br>';
$theatre->watchMovie();
echo '<br> <br> <br>';
echo 'Закончить просмотр <br> <br>';
$theatre->endMovie();