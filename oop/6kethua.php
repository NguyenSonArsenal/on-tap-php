<?php

class ParentClass {
    protected $var = 'a super call property';

    public function display() {
        echo $this->var . '<br>';
    }
}

class SubClass extends ParentClass {
    public function getVar() {
        return 'returning : ' . $this->var;
    }
}

$obj = new SubClass();
$obj->display();
echo $obj->getVar();


echo '<br>';
echo '<br>';
echo '<br>';


class A {
    protected static $x = 'value x';

    function __construct() {
        echo 'In constructor of ' . __CLASS__ . ' class' . ' <br>';
    }
}

class B extends A {
    function __construct() {
        // parent::__construct();
        echo parent::$x . '<br>';
        echo 'In constructor of ' . __CLASS__ . ' class' . '<br>' ;
    }
}

$objB = new B();

//<?php
//class A {
//    protected static $x = 'value x';
//    function __construct() {
//        echo 'In constructor of ' . __CLASS__ . '<br>';
//    }
//}
//class B extends A {
//    function __construct() {
//        parent::__construct();
//        echo parent::$x .'<br>';
//        echo 'In constructor of ' . __CLASS__ . '<br>';
//    }
//}
//
//$b = new B();

/*class MyParentClass {
    protected $var = 'a super call property';

    public function display() {
        echo $this->var . '<br>';
    }
}
class MySubclass extends MyParentClass {
    public function getVar() {
        return 'returning ' . $this->var;
    }
}

$a = new MySubClass();
$a->display();
echo $a->getVar();
*/?>