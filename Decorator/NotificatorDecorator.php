<?php


namespace patterns\Decorator;


class NotificatorDecorator extends DecoratorAbstract
{
    public function notify()
    {
        $this->component->notify();

        echo 'Send sms' . PHP_EOL;
    }
}