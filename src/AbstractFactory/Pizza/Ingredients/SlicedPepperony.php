<?php


namespace Patterns\AbstractFactory\Pizza\Ingredients;


class SlicedPepperony implements PepperonyInterface
{

    public function create()
    {
        return 'Порезанные пеперони';
    }
}