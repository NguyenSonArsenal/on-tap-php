<?php

class MyClass {
    public $myProperty = 'a property value';

    public function display() {
        echo $this->myProperty;
    }
}

$var = new MyClass();
$var->display();
echo $var->myProperty;
