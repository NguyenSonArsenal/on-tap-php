<?php

interface Workable
{
    public function work();
}

class Programmer
{
    public function work()
    {
        return 'coding';
    }
}

class Tester implements Workable
{
    public function work()
    {
        // TODO: Implement work() method.
        return 'testing';
    }
}

class Projectmanager
{
    public function process(Workable $name)
    {
        return $name->work();
    }
}

$test = new Projectmanager();
echo $test->process(new Tester());

