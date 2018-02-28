<?php

namespace oop;

trait Database {
    function listUsers()
    {
        return 'This is function list users';
    }

    function sayHello()
    {
        return 'hello';
    }
}

trait Word {
    function sayWord()
    {
        return 'Word';
    }
}

class Users{
    use Database;

    function getUser()
    {
        return $this->listUsers();
    }
}

class Report {
    use Database;

    function makeReport()
    {
        return $this->listUsers();
    }
}

class HelloWord {
    use Database, Word;

    function sayHelloWord()
    {
        return ($this->sayHello() . $this->sayWord() . '!');
    }
}

$report = new Report();
echo 'In obj report: ' . $report->makeReport() . '<br>';

$user = new Users();
echo 'In obj user: ' . $user->getUser() . '<br>';

$helloWord = new HelloWord();
echo 'In helloword obj: ' . $helloWord->sayHelloWord() . '<br>';

// Xét độ ưu tiên khi các trait có cùng phương thức
trait SetGetName {
    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function getAll()
    {
        return $this->getName();
    }
}

trait SetGetAge {
    function setAge($age)
    {
        $this->age = $age;
    }

    function getAge()
    {
        return $this->age;
    }

    function getAll()
    {
        return $this->getAge();
    }
}

class ConNguoi {
    use SetGetAge, SetGetName {
        SetGetAge::getAll insteadof SetGetName;
    }

    public $name;
    public $age;
}

$connguoi = new ConNguoi();
$connguoi->setName('Son');
$connguoi->setAge(23);
echo $connguoi->getAll();