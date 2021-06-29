<?php


namespace patterns\Observer;


class Mailer implements \SplObserver
{
    public function send($text)
    {
        echo $text . PHP_EOL;
    }

    public function update(\SplSubject $subject)
    {
        $this->send('Status was changed to ' . $subject->getStatus());
    }
}