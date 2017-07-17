<?php


namespace Patterns\Adapter\Duck;


class WildTurkey implements Turkey
{

    public function fly()
    {
        return 'Индейка летает недалеко';
    }

    public function gobble()
    {
        return 'Индейка кулдыкает';
    }
}