<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

// Просто утка
$duck = new Patterns\Adapter\Duck\MallardDuck();

// Просто индюшка
$turkey = new \Patterns\Adapter\Duck\WildTurkey();


function testDuck(\Patterns\Adapter\Duck\Duck $duck){
    echo '<br>';echo '<br>';echo '<br>';
    echo $duck->fly();
    echo '<br>';
    echo $duck->quack();
}


echo 'Утка <br>';
echo '<br>';
echo $duck->fly();
echo '<br>';
echo $duck->quack();
echo '<br>';
echo '<br>';echo '<br>';
echo 'Индюшка <br>';
echo '<br>';
echo $turkey->fly();
echo '<br>';
echo $turkey->gobble();
echo '<br>';

$turkeyLikeDuck = new \Patterns\Adapter\Duck\TurkeyAdapter($turkey);


echo 'Функция вывода <br>';


testDuck($duck);
testDuck($turkeyLikeDuck);
