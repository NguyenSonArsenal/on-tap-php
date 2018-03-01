<?php

class ConNguoi
{
    protected static $name = 'Nguyen Van A';

    public function getSelf()
    {
        return new self();
    }

    public function getStatic()
    {
        return new static();
    }
}

class NguoiLon extends ConNguoi
{

}

$test = new NguoiLon();
print_r($test->getSelf());
print_r($test->getStatic());

