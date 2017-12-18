<?php

class Singleton_demo
{
    // Only a element of this class is exit
    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if(null === self::$instance)
        {
            self::$instance = new Singleton_demo;
            echo 'New';
            return new Singleton_demo;
        }
        echo 'Olds';
        return static::$instance;
    }
}

$singleton = Singleton_demo::getInstance(); // New
$singleton = Singleton_demo::getInstance(); // Old
$singleton = Singleton_demo::getInstance(); // Old