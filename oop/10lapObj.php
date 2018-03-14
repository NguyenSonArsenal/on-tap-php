<?php

class Test {
    public $str = 'a str property';
    public $int = 3;
    protected $str2 = 'a protected str property';
    private $str3 = 'a private str property';

    function display() {
        echo 'xxx <br>';
        foreach ($this as $key => $value) {
            echo "$key => $value <br> ";
        }
    }
}

$obj = new Test();
$obj->display();

echo '------- <br>';