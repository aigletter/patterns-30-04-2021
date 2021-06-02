<?php


namespace patterns\AbstractFactory;


class RealProduct implements ProductInterface
{

    public function getPrice(): float
    {
        return 10;
    }
}