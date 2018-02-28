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

class SmtpMailer implements Mailer
{
    public function send()
    {
        return 'Send by smtp';
    }
}