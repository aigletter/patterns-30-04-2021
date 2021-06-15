<?php


namespace patterns\ChainOfResponsibility;


class AuthHandler extends HandlerAbstract
{
    public function handle(Request $request)
    {
        session_start();
        if (empty($_SESSION['auth'])) {
            throw new \Exception('Access denied');
        }

        echo 'User has access' . PHP_EOL;

        return parent::handle($request);
    }
}