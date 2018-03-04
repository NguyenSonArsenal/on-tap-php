<?php


// Bat buoc la puclic
// PUBLIC function __call($methodName, $arguments as [])
//{
//    //code
//}

class Person
{
    private $name = "Nguyen Van Son";
    private $age = 22;

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo '<pre>';
        print_r($arguments);
        echo "Ban vua goi phuong thuc $name <br>";
    }

    private function getName()
    {
        echo $this->name;
    }
}

$obj = new Person();
$obj->getName('Son', 'xxx');