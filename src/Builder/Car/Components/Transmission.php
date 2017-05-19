<?php


namespace Patterns\Builder\Car\Components;


use Paillechat\Enum\Enum;

class Transmission extends Enum
{
    const SINGLE_SPEED = 'одна скорость';
    const MANUAL = 'ручная коробка';
    const AUTOMATIC = 'автоматическая коробка';
    const SEMI_AUTOMATIC = 'полуавтоматическая коробка';
}