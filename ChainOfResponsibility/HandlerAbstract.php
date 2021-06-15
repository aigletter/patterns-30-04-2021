<?php


namespace patterns\ChainOfResponsibility;


abstract class HandlerAbstract implements HandlerInterface
{
    /**
     * @var HandlerInterface
     */
    protected $next;

    public function __construct(HandlerInterface $handler = null)
    {
        $this->next = $handler;
    }

    public function handle(Request $request)
    {
        if ($this->next) {
            return $this->next->handle($request);
        }

        throw new \Exception('Can not handle request');
    }
}