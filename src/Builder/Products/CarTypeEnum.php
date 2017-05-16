<?php


namespace Patterns\Builder\Products;


use Paillechat\Enum\Enum;

class CarTypeEnum extends Enum
{
    const CITY_CAR = 'городская машина';
    const SPORTS_CAR = 'спортивная машина';
    const SUV = 'внедорожник';
}