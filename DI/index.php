<?php

include '../../vendor/autoload.php';

//$something = new \patterns\DI\Something();
/*$cilinder = new \patterns\DI\Cilinder($something);
$engine = new \patterns\DI\Engine($cilinder);

$car = new \patterns\DI\Car($engine);*/
//echo  $car->doSomething();


$injector = new \patterns\DI\Injector();
$instance = $injector->getInstance(\patterns\DI\Car::class);

/*$storage = new \patterns\DI\Storage();

// 1
$items = $storage->getItemsDirect();
$iterator1 = new ArrayIterator($items);

// 2
$iterator2 = $storage->getItemsCallback(function ($items) {
    return new ArrayIterator($items);
});*/


exit();