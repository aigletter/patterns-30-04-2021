<?php


namespace patterns\Adapter;


interface MailerInterface
{
    public function sendEmail($to, $subject, $message);
}