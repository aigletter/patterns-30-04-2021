<?php


namespace patterns\Bridge\old;


class OrderReport implements ReportInterface
{
    public function save()
    {
        echo 'Order report xml was saved successfully' . PHP_EOL;
    }
}