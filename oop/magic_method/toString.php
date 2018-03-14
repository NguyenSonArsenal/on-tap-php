<?php

class Person
{
    private $name = 'Nguyen Van A';

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return 'Magic method toString da duoc goi <br>';
    }

    public function __invoke($name)
    {
        // TODO: Implement __invoke() method.
        echo 'Magic method __invoke da duoc goi <br>';
        if($name === 'name')
            echo 'Name: ' . $this->name;
    }
}

$obj = new Person();

echo $obj;

$obj('name');