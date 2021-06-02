<?php


namespace patterns\AbstractFactory;


class RealOrderFactory implements AbstractFactoryInterface
{

    public function createOrder(): OrderInterface
    {
        return new RealOrder();
    }

    public function createProduct(): ProductInterface
    {
        return new RealProduct();
    }
}