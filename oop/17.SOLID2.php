<?php

interface Mailer
{
    public function send();
}

class SmtpMailer implements Mailer
{
    public function send()
    {
        return 'Send by smtp';
    }
}

class SendGridMailer implements Mailer
{
    public function send()
    {
        return 'Send by smtp';
    }
}

class SendWelcomeMessage
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        echo 'Obj SendWelcomeMessage da duoc tao';
        $this->mailer = $mailer;
    }
}

$test = new SendWelcomeMessage(new SendGridMailer());
// var_dump($test->send()) ;