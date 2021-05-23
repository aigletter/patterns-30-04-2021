<?php

use patterns\FactoryMethod\FactoryAbstract;

include '../../vendor/autoload.php';


$services = [];

//$factories = [];
$factory1 = new \patterns\FactoryMethod\FactoryServiceOne();
$factory2 = new \patterns\FactoryMethod\FactoryServiceTwo();

createService('cache', $factory1);
createService('logger', $factory2);

//$service1 = $factory1->createInstance();
//$service2 = $factory2->createInstance();

/*$services = [];
foreach ($factories as $factory) {
    $services[] = $factory->createInstance();
}*/

function createService(string $key, FactoryAbstract $factory)
{
    global $services;
    $services[$key] = $factory->createInstance();
}

exit();