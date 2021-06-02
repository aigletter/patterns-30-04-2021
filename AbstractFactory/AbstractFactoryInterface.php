<?php


namespace patterns\AbstractFactory;


interface AbstractFactoryInterface
{
    public function createOrder(): OrderInterface;

    public function createProduct(): ProductInterface;
}