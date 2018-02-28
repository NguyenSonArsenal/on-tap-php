<?php

class Hinh {
    function dientich(){}
}

class HinhVuong {
    private $canh;

    function setCanh($canh)
    {
        $this->canh = $canh;
    }

    function getCanh()
    {
        return $this->canh;
    }

    function dientich()
    {
        return pow($this->getCanh(), 2);
    }
}

class HinhTron{
    private $bankinh;

    function setBanKinh($bk)
    {
        $this->bankinh = $bk;
    }

    function getBanKinh()
    {
        return $this->bankinh;
    }

    function dientich()
    {
        return 3.14*pow($this->getBanKinh(), 2);
    }
}

$hinhvuong = new HinhVuong();
$hinhvuong->setCanh(5);
echo 'Dien tich hinh vuong la: ' . $hinhvuong->dientich() . '<br>';

$hinhtron = new HinhTron();
$hinhtron->setBanKinh(5);
echo 'Dien tich hinh tron la: ' . $hinhtron->dientich() . '<br>';