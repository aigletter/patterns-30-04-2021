<?php


namespace patterns\FactoryMethod;


abstract class FactoryAbstract
{
    public function createInstance(): ServiceInterface
    {
        return $this->createConcreteInstance();
    }

    abstract protected function createConcreteInstance(): ServiceInterface;
}