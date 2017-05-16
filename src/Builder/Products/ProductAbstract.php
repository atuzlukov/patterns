<?php


namespace Patterns\Builder\Products;


use Patterns\Builder\Builder;

abstract class ProductAbstract
{
    /**
     * @var Builder
     */
    protected $builder;

    function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    abstract public function make();
}