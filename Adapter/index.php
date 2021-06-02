<?php

use patterns\Adapter\Mailer;
use patterns\Adapter\MailerInterface;

include '../../vendor/autoload.php';

$mailer = new \patterns\Adapter\MailerAdapter();

doSomething($mailer);


// Забыли
function doSomething(MailerInterface $mailer)
{
    $mailer->sendEmail('ivan@gmail.com', 'Hello', 'Message body');
}