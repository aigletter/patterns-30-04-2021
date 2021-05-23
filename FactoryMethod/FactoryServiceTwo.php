<?php


namespace patterns\FactoryMethod;


class FactoryServiceTwo extends FactoryAbstract
{
    protected function createConcreteInstance(): ServiceInterface
    {
        return new ServiceTwo();
    }
}