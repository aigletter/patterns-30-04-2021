<?php


namespace patterns\AbstractFactory;


interface OrderInterface
{
    public function addProduct(ProductInterface $product);

    public function calculateSum();
}