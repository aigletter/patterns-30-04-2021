<?php


namespace patterns\Decorator;


use patterns\Decorator\NotificatorInterface;

class PushNotifyDecorator extends DecoratorAbstract
{
    public function notify()
    {
        $this->component->notify();

        echo 'Send push notification' . PHP_EOL;
    }
}