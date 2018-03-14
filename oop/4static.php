<?php

class Four {
    static $var = 'a static property';

    static function aMethod() {
        return self::$var;
    }
}

// echo Four::$var;
// echo Four::aMethod();

class Person {
    private $name;

    public function __construct($name)
    {
        echo 'Obj person da duoc tao <br>';
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getTitle()
    {
        return $this->getName(). ' the person';
    }

    public function sayHello()
    {
        echo "Hello, I'm " . $this->getTitle() . '<br>';
    }

    public function sayGoobye()
    {
        // echo "Goobye from " . seft::getTitle() . '<br>';
    }
}

class Geek extends Person {
    public function __construct($name)
    {
        parent::__construct($name);
    }
}

// $test = new Person('Son');
// $test->sayHello();
// $test->sayGoobye();

class ConNguoi
{
    private $name = 'Nguyen van 1 ';

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$connguoi = new ConNguoi();
$connguoi->setName('Son 123job');
//echo $connguoi->getName();

echo '<br>';

$connguoi2 = new ConNguoi();
//echo $connguoi2->getName();

echo '<br>';

class ConNguoi2
{
    private static $name = 'Nguyen van 2 ';

    public function setName($name)
    {
        // Goi thuoc tinh static
        //self::$name = $name;
        // or
        ConNguoi2::$name = $name;
    }

    public function getName()
    {
        return self::$name;
    }
}

$cn = new ConNguoi2();
$cn->setName('Nguyen Van IT ');
echo $cn->getName();

// vi $name khai bao static nen no se luu lai gia tri vua set

$cn = new ConNguoi2();
echo $cn->getName();