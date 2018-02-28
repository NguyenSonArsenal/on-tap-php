<?php

class Four {
    static $var = 'a static property';

    static function aMethod() {
        return self::$var;
    }
}

echo Four::$var;
echo Four::aMethod();

class Person {
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getTitle()
    {
        return $this->getName(). ' the person';
    }

    public function sayHello()
    {
        echo "Hello, I'm " . $this->getTitle() . '<br>';
    }

    public function sayGoobye()
    {
        echo "Goobye from " . seft::getTitle() . '<br>';
    }
}

class Geek extends Person {
    public function __construct($name)
    {
        parent::__construct($name);
    }


}