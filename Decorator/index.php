<?php

use patterns\Decorator\NotificatorInterface;
use patterns\Decorator\PushNotifyDecorator;

include '../../vendor/autoload.php';


$notificator = new PushNotifyDecorator(
    new \patterns\Decorator\NotificatorDecorator(
        new \patterns\Decorator\Notificator()
    )
);

// CODE


doSomething($notificator);

function doSomething(NotificatorInterface $notificator)
{
    $notificator->notify();
}