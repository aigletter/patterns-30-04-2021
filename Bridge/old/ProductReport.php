<?php


namespace patterns\Bridge\old;


class ProductReport implements ReportInterface
{

    public function save()
    {
        echo 'Product report xml is working' . PHP_EOL;
    }
}