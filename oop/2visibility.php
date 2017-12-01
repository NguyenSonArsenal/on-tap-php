<?php

class TwoVisibility {
    public $var1 = 'public var';
    protected $var2 = 'protected var';
    private $var3 = 'private var';

    function printHello() {
        echo $this->var1 . '<br>';
        echo $this->var2 . '<br>';
        echo $this->var3 . '<br>';
    }
}

$obj = new TwoVisibility();
$obj->printHello();
echo $obj->var1;

//<?php
//class MyClass {
//    public $var1 = 'public var';
//    protected $var2 = 'protected var';
//    private $var3 = 'private var';
//
//    function printHello() {
//        echo $this->var1 . '<br>';
//        echo $this->var2 . '<br>';
//        echo $this->var3 . '<br>';
//    }
//}
//
//$obj = new MyClass();
//echo $obj->var1 . '<br>'; // prints public var
//$obj->printHello(); // prints all
//
//// if uncommented followings will produce fatal errors
///*
//* echo $obj->var2; // Fatal Error
//* echo $obj->var3; // Fatal Error
//*/