<?php


namespace patterns\Prototype;


class ComplexObject
{
    protected $a;

    protected $b;

    protected $c;

    protected $obj;

    public function __construct(string $a, string $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function setC(string $c)
    {
        $this->c = $c;
    }

    public function setObj($obj)
    {
        $this->obj = $obj;
    }

    public function getObj()
    {
        return $this->obj;
    }

    public function __clone()
    {
        $this->c = null;
        $this->obj = clone $this->obj;
    }
}