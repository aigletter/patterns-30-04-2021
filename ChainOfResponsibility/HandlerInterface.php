<?php


namespace patterns\ChainOfResponsibility;


interface HandlerInterface
{
    public function handle(Request $request);
}