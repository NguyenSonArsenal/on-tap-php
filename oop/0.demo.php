<?php

class Personel {
    public $name = 'Nguyen Van A';
    private $age = 23;

    // Khai báo 1 thuộc tính cố định
    const hang = 'xxx';

    var $emai; // Khai bao thuoc tinh dong
    var $gender;

    const AGE = 23;

    function getAge()
    {
        return self::AGE;
    }

    function speak($text)
    {
        return $this->email = $text;
    }

    function sleep()
    {
        return $this->getAge();
    }

    public function getPersonel()
    {
        return $this->name . ' - ' . $this->age;
    }
}

// Khoi tao obj
//C1:
$c1 = new Personel(); // recommend
echo 'Age: ' . $c1->getAge() . '<br>';
echo 'Name init: ' . $c1->name . '<br>';
echo 'Age: ' . Personel::AGE . '<br>';

$c1->name = 'Name is changed';
echo 'Name result: ' . $c1->name;

// c2
$c2 = new Personel;