<?php

function add ($a, $b)
{
    return $a + $b;
}

$test = 'add';

echo $test(3,5); // 8

echo '<br>';

$foo = null;

echo $foo;
var_dump($foo);

echo '<br>';

$x = true;

if ($x)
{
    echo 'x: true';
}
else
{
    echo 'x: false';
}

echo '<br>';

function getPostValue($key, $default = 'aaa')
{
    if (isset($_POST[$key]))
        return $_POST[$key];
    return $default;
}

echo getPostValue('xxx');
echo '<br>';
echo getPostValue('xxx', '18+');

echo '<br>';

class SomeClass {
    public static $count = 0;
}

$test = SomeClass::$count+=1;

echo $test;
echo '<br>';

class Lab
{
    const TIME = 5; // hour
    const PRICE = 1000; // $

    function getFee()
    {
        return self::TIME * self::PRICE;
    }
}

$objLab = new Lab();
echo 'Fee lab is ' . $objLab->getFee();

echo '<br>';

class MathValue {
    const PI = M_PI;
    const dateOfBirth = 29795;
}

echo 'My birthday is: ' . MathValue::dateOfBirth . '<br>';

class Pie {
    protected $fruit;

    function __construct($fruit)
    {
        $this->$fruit = $fruit;
    }
}

class Friut {
    const TAO = 'TA0';
    CONST XOAI = 'XOAI';
    CONST CAM = 'CAM';
}

$pie = new Pie(Friut::TAO);

abstract class Person {
    public $name; // dung

    // sai vi thuoc tinh khong duoc khi bao vs tu khoa abstract
    //abstract public $name;

    abstract public function getName();

    // function nay sai vi abstract function k duoc phep chua code trong body
    //abstract public function getName2(){};

    protected function getOld()
    {
        return 100;
    }
}

// khong the khoi tao obj tu class abstract
// $xxx = new Person;


interface DongVat {
    public function getName();

    // Sai vi trong interface khong the khai bao bien
    //public $chan;

    // Sai vi trong interface khong duoc dinh nghia code trong body
    //public function getOld() {};
}

// khong the khoi tao obj tu class abstract
// $xxx = new DongVat;

interface ConTrau extends DongVat
{
    public function checkSung();
}

class ConNghe implements ConTrau
{
    private $name;
    const SUNG = true;

    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->name;
    }

    public function checkSung()
    {
        // TODO: Implement checkSung() method.
        return self::SUNG;
    }
}
echo 12345;
$testInterface = new ConNghe();
var_dump($testInterface->getName()) ;
