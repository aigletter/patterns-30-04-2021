<?php


namespace patterns\Bridge;


class XmlFormatter implements FormatterInterface
{

    public function format()
    {
        echo 'Format xml' . PHP_EOL;
    }
}