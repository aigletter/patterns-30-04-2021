<?php


namespace patterns\DI;


class Cilinder
{
    protected $something;

    public function __construct(Something $something)
    {
        $this->something = $something;
    }
}