<?php


namespace patterns\DI;


class Engine
{
    /*protected $volume;

    protected $power;*/

    protected $cilinder;

    public function __construct(Cilinder $cilinder)
    {
        $this->cilinder = $cilinder;
        /*$this->volume = $volume;
        $this->power = $power;*/
    }

    public function start()
    {
        return 'Started' . PHP_EOL;
    }
}