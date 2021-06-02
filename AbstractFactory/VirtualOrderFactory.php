<?php


namespace patterns\AbstractFactory;


class VirtualOrderFactory implements AbstractFactoryInterface
{

    public function createOrder(): OrderInterface
    {
        return new VirtualOrder();
    }

    public function createProduct(): ProductInterface
    {
        return new VirtualProduct();
    }
}