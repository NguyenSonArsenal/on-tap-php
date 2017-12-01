<?php

class Five {
    private $prop;

    function __construct($var) {
        echo 'In constructor of' . __CLASS__ . '<br>';
        $this->prop = $var;
    }

    public function displayProp() {
        echo $this->prop . '<br>';
    }

    function __destruct() {
        // TODO: Implement __destruct() method.
        echo 'destroying ' . __CLASS__ . '<br>';
    }
}

$obj = new Five('xxx');
$obj->displayProp();
/*class MyClass {
    private $prop;

    function __construct($var) {
        echo 'In constructor of ' . __CLASS__ . '<br>';
        $this->prop = $var;
    }

    public function displayProp() {
        echo $this->prop .'<br>';
    }

    function __destruct() {
        echo 'destroying ' . __CLASS__;
    }
}

$a = new MyClass('the property value');
$a->displayProp();
*/?>