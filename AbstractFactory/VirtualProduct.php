<?php


namespace patterns\AbstractFactory;


class VirtualProduct implements ProductInterface
{
    public function getPrice(): float
    {
        return 5.2;
    }
}