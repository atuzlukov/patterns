<?php


namespace Patterns\Adapter\Duck;


class TurkeyAdapter implements Duck
{

    private $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function fly()
    {
        $fly = '';

        for ($i = 0; $i < 5; $i++) {
            $fly .= $this->turkey->fly();
        }

        return $fly;
    }

    public function quack()
    {
        return $this->turkey->gobble();
    }
}