<?php

use patterns\Prototype\ComplexFactory;
use patterns\Prototype\ComplexObject;
use patterns\Prototype\SomeClass;

include '../../vendor/autoload.php';

$prototype = new ComplexObject('a', 'b');
$prototype->setC('c');
$prototype->setObj(new SomeClass());


// Client code

doSomething();

function doSomething()
{
    global $prototype;
    $factory = new ComplexFactory($prototype);

    $instance1 = $factory->createInstance();
    $instance2 = $factory->createInstance();

    $obj = $instance1->getObj();
    $obj->test = 'blablabla';

    print_r($instance1);
    print_r($instance2);
}