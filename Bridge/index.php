<?php

use patterns\Bridge\ReportInterface;

include "../../vendor/autoload.php";

$get = 'json';

// Client code

//$report = new \patterns\Bridge\OrderReport();
//$report = new \patterns\Bridge\ProductReport();
//$report = new \patterns\Bridge\OrderJsonReport();
//$report = new \patterns\Bridge\ProductJsonReport();

$report = new \patterns\Bridge\OrderReport(new \patterns\Bridge\XmlFormatter());


if ($get === 'xml') {
    $report->setFormatter(new \patterns\Bridge\XmlFormatter());
} else {
    $report->setFormatter(new \patterns\Bridge\JsonFormatter());
}


doSomething($report);
function doSomething(ReportInterface $report)
{
    $report->save();
}