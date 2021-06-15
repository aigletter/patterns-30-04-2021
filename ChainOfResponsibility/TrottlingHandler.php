<?php


namespace patterns\ChainOfResponsibility;


class TrottlingHandler extends \patterns\ChainOfResponsibility\HandlerAbstract
{
    public function handle(Request $request)
    {
        echo 'No trottling' . PHP_EOL;

        return parent::handle($request);
    }
}