<?php


namespace patterns\Bridge\old;


class ProductJsonReport implements ReportInterface
{

    public function save()
    {
        echo 'Product json report saved' . PHP_EOL;
    }
}