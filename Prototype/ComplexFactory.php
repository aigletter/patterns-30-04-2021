<?php


namespace patterns\Prototype;


class ComplexFactory
{
    protected $prototype;

    public function __construct($prototype)
    {
        $this->prototype = $prototype;
    }

    public function createInstance()
    {
        $instance = clone $this->prototype;
        return $instance;
    }
}