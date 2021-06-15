<?php

use patterns\ChainOfResponsibility\HandlerInterface;

include '../../vendor/autoload.php';

session_start();
$_SESSION['auth'] = true;


$handler = new \patterns\ChainOfResponsibility\ControllerHandler();
$handler = new \patterns\ChainOfResponsibility\AuthHandler($handler);
$handler = new \patterns\ChainOfResponsibility\TrottlingHandler($handler);

run($handler);

function run(HandlerInterface $handler)
{
    $request = new \patterns\ChainOfResponsibility\Request();
    echo $handler->handle($request);
}