<?php

use patterns\Composite\CompositeInterface;
use patterns\Composite\Span;

include '../../vendor/autoload.php';

$span = new Span('Hello');
$span->add(new Span('Inner span'));
$div = new \patterns\Composite\Div();
$div->add($span);

showPageContent($div);




function showPageContent(CompositeInterface $element) {
    echo $element->render();
}