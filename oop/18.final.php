<?php

// duoc ung dung vao class va method

// final class thi k cho ke thua
final class A
{

}

class B
{
    public final function getName()
    {
        echo 'Nguyen van B';
    }
}

class C extends B
{
    // Khong the ghi de phuong thuc final
//    public function getName()
//    {
//        echo 'Nguyen Van C';
//    }
}

$b = new B();
$b->getName();
