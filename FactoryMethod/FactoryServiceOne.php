<?php

namespace patterns\FactoryMethod;


class FactoryServiceOne extends FactoryAbstract
{
    protected function createConcreteInstance(): ServiceInterface
    {
        return new ServiceOne();
    }
}