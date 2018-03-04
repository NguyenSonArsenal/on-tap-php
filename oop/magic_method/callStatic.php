<?php

class Person
{
    private $name = 'Nguyn van A';

    public static function __callStatic($methodName, $arg)
    {
        echo 'Ban vua goi phuong thuc static: ' . $methodName;

        echo '<pre>';
        print_r($arg);
    }

    private static function getInfo()
    {
        echo self::name;
    }
}

Person::getInfo();
Person::getInfo('xxx', '');