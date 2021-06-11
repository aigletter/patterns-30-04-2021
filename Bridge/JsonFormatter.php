<?php


namespace patterns\Bridge;


class JsonFormatter implements FormatterInterface
{
    public function format()
    {
        echo 'Json format' . PHP_EOL;
    }
}