<?php


namespace patterns\Decorator;


class Notificator implements NotificatorInterface
{

    public function notify()
    {
        echo 'Send email notification' . PHP_EOL;
    }
}