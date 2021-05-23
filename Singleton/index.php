<?php

use patterns\Singleton\Singleton;

include '../../vendor/autoload.php';

$ob1 = Singleton::getInstance();
$ob2 = Singleton::getInstance();
$ob3 = Singleton::getInstance();

exit();