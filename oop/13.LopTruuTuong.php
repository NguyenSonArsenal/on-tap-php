<?php

abstract class DongVat {

    // Thuoc tinh khong duoc khai bao abstract
    protected $name;
    // abstract public $age = 23; // Sai

    abstract public function getName();

    //abstract public function getHeight() {}; // Sai vi abstact function must be no body

    protected function getJob()
    {
        echo 'I am a animal';
    }
}

// Phải định nghĩa lại các phương thức abstract của lớp cha khi kế thừa một abstract class

class ConBo extends DongVat {
    function getName()
    {
        // TODO: Implement getName() method.
        return $this->name;
    }
}

// Khong the khoi tao mot
// $person = new DongVat(); // Sai