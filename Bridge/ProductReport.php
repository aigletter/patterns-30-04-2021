<?php


namespace patterns\Bridge;


class ProductReport extends ReportAbstract
{
    public function save()
    {
        $this->formatter->format();
    }
}