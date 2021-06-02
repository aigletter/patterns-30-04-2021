<?php


namespace patterns\Adapter;


class Mailer implements MailerInterface
{
    public function sendEmail($to, $subject, $message)
    {
        echo 'Send message to ' . $to . ' with subject ' . $subject . ' and message ' . $message;
    }
}