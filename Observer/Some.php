<?php


namespace patterns\Observer;


class Some implements \SplObserver
{

    public function update(\SplSubject $object)
    {
        echo 'Hello world' . PHP_EOL;
    }
}