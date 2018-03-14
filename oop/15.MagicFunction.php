<?php

class ConNguoi {
    private $title = 'Viet Nam vo dich <br>';

    // Tự động chạy khi ta lấy ra giá trị thuộc tính mà không tồn tại hoặc
    // k có quyền truy cập từ bên ngoài
    public function __get($name)
    {
        // TODO: Implement __get() method.
        // Kiem tra xem trong class co thuoc tinh khong
        if (property_exists($this, $name))
        {
            return $this->name;
        }
        else
        {
            die('Khong ton tai thuoc tinh <br>');
        }
    }


}

class Person
{
    private $age;

    // Tự động chạy khi ta muốn thiết lập giá trị cho 1 thuộc tính mà không tồn tại
    // hoặc không được phép truy cập từ bên ngoài

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        if(property_exists($this, $name)) {
            $this->$name = $value;
        }
        else {
            die('Khong ton tai thuoc tinh <br>');
        }
    }

    function getTite()
    {
        echo $this->age;
    }
}

//$vietnam = new ConNguoi();
//$vietnam->getTite();

//$vietnam->title; // auto run __get because $title properties is private


$vn = new Person();
$vn->age = 'Viet nam vo dich <br>';
$vn->getTite();

$vn->xxx = 20;