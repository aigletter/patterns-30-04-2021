<?php

use patterns\Observer\Mailer;
use patterns\Observer\Order;

include '../../vendor/autoload.php';


$order = new Order();

$mailer = new Mailer();
$order->attach($mailer);

$some = new \patterns\Observer\Some();
$order->attach($some);

$order->changeStatus('paid');

//

if ($order->getStatus() === 'paid') {
    $order->detach($some);
}

$order->changeStatus('sent');

exit();