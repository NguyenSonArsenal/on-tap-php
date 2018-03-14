<?php

class A
{
    public function sayHello()
    {
        echo 'Hello, I am Min';
    }
}

class B extends A
{
    public function sayHello()
    {
        echo 'Hello, I am Mr B';
    }

}

class C extends A
{
    public function sayHello($name)
    {
        echo 'Hello ' . $name;
    }
}

$b = new B();
$b->sayHello();

$c = new C();
$c->sayHello('xxx');