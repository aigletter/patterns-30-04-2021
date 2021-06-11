<?php


namespace patterns\Bridge;


class OrderReport extends ReportAbstract
{
    public function save()
    {
        $this->formatter->format();
    }
}