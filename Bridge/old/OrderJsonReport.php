<?php


namespace patterns\Bridge\old;


class OrderJsonReport implements \patterns\Bridge\ReportInterface
{

    public function save()
    {
        echo 'Order json report saved' . PHP_EOL;
    }
}