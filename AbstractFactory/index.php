<?php

use patterns\AbstractFactory\AbstractFactoryInterface;
use patterns\AbstractFactory\RealOrderFactory;
use patterns\AbstractFactory\VirtualOrderFactory;

include '../../vendor/autoload.php';

function manageOrder(AbstractFactoryInterface $factory)
{
    $order = $factory->createOrder();
    $product1 = $factory->createProduct();
    $product2 = $factory->createProduct();
    $order->addProduct($product1);
    $order->addProduct($product2);
    return $order->calculateSum();
}

createRealProduct();

function createRealProduct()
{
    $sum = manageOrder(new RealOrderFactory());
    echo $sum . PHP_EOL;
}

function createVirtualProduct()
{
    $sum2 = manageOrder(new VirtualOrderFactory());
    echo $sum2;
}