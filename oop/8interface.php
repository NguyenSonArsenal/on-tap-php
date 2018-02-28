<?php

interface DongVat{
    // Chỉ được khai báo phương thức chứ không được định nghĩa chúng
    public function getName();

    // Chỉ được khai báo hằng mà không được khai báo biến
    const AGE = 11;
    // public tai; // sai
}

// interface co the ke thua lan nhau
interface ConNghe extends DongVat {
    public function checkSung();
}

// Các lớp impliment interfaces thì phải định nghĩa lại các phương thức
class ConBo implements DongVat, ConNghe {
    private $name;
    const SUNG = false;


    function getName()
    {
        // TODO: Implement getName() method.
        return $this->name;
    }

    function checkSung()
    {
        // TODO: Implement checkSung() method.
        return self::SUNG;
    }
}

class ConCho implements DongVat {
    private $name;

    function getName()
    {
        // TODO: Implement getName() method.
        return $this->name;
    }
}

// Không thể khởi tạo một interface
// $obj = new DongVat(); // Sai