<?php


namespace patterns\ChainOfResponsibility;


class ControllerHandler extends HandlerAbstract
{
    public function handle(Request $request)
    {
        $controller = new Controller();
        return $controller->index();
    }
}