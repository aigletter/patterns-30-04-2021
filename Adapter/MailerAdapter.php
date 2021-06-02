<?php


namespace patterns\Adapter;


use PHPMailer\PHPMailer\PHPMailer;

class MailerAdapter implements MailerInterface
{

    public function sendEmail($to, $subject, $message)
    {
        $mailer = new PHPMailer();
        $mailer->addAddress($to);
        $mailer->Subject = $subject;
        $mailer->Body = $message;

        //$mailer->send();

        echo 'Success!';
    }
}