<?php


namespace patterns\DI;


interface InjectorInterface
{
    public function getInstance(string $className);
}