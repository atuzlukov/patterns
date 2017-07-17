<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$remote = new \Patterns\Command\Remote\RemoteControl();

// Создание устройств
$light = new \Patterns\Command\Remote\Device\Light();
$stereo = new \Patterns\Command\Remote\Device\Stereo();
$fan = new \Patterns\Command\Remote\Device\Fan();

// Создание команд
$lightOnCommand = new \Patterns\Command\Remote\Commands\LightOnCommand($light);
$lightOffCommand = new \Patterns\Command\Remote\Commands\LightOffCommand($light);

$fanLowCommand = new \Patterns\Command\Remote\Commands\FanLowCommand($fan);
$fanOffCommand = new \Patterns\Command\Remote\Commands\FanOffCommand($fan);

$stereoOnCommand = new \Patterns\Command\Remote\Commands\StereoOnCommand($stereo);
$stereoOffCommand = new \Patterns\Command\Remote\Commands\StereoOffCommand($stereo);


$macroCommandOn = new \Patterns\Command\Remote\Commands\MacroCommand([$lightOnCommand, $fanLowCommand, $stereoOnCommand]);
$macroCommandOff = new \Patterns\Command\Remote\Commands\MacroCommand([$lightOffCommand, $fanOffCommand, $stereoOffCommand]);

$remote->setCommand('macro', $macroCommandOn, $macroCommandOff);
//$remote->setCommand('stereo', $stereoOnCommand, $stereoOffCommand);
//$remote->setCommand('fan', $fanLowCommand, $fanOffCommand);

echo $remote->onButtonPush('macro');
echo '<br>';
echo $remote->offButtonPush('macro');
echo '<br>';
echo $remote->undoButtonPush();
//echo '<br>';
//echo $remote->onButtonPush('stereo');
//echo '<br>';
//echo $remote->undoButtonPush();
//echo '<br>';
//echo '<br>';
//echo $remote->offButtonPush('stereo');
//echo '<br>';
//
//echo $remote->onButtonPush('fan');
//echo '<br>';
//
//echo $remote->undoButtonPush();
//echo '<br>';