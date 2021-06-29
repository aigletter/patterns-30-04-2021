<?php


namespace patterns\DI;


class Car
{
    protected $engine;

    protected $bla;

    public function __construct(Engine $engine)
    {
        //$this->engine = new Engine();
        $this->engine = $engine;
    }

    public function setBla(Bla $bla)
    {
        $this->bla = $bla;
    }

    public function hello(Hello $hello)
    {
        // TODO something
        $hello->sayHello();

        return null;
    }

    public function getBla(): Bla
    {
        return $this->bla;
    }

    public function doSomething()
    {
        return $this->engine->start();
    }

    public function run()
    {

    }
}