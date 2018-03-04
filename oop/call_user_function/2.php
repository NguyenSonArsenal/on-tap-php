<?php
namespace oop;
// call function and pass first paramatter

echo '<br>=====ex1=====<br>';

function increment(&$var)
{
    $var++; // $var = $var+ 1;
}

$a=0;

call_user_func(__NAMESPACE__. '\increment', $a);

echo $a . "\n";

call_user_func_array(__NAMESPACE__.'\increment', [&$a]);

echo $a . "\n";

// Vidu2
echo '<br>=====ex2=====<br>';

function barber($type)
{
    echo "You wanted a $type haircut, no problem <br>";
}

call_user_func(__NAMESPACE__.'\barber', 'mushroom');
call_user_func(__NAMESPACE__.'\barber', 'shave');

echo '<br>=====ex3=====<br>';

class Foo
{
    public static function test()
    {
        echo 'Hello word! <br>';
    }

    public function sayHello()
    {
        echo 'You are wanna say: 2 <br>';
    }
}

call_user_func(__NAMESPACE__.'\Foo::test');
call_user_func([__NAMESPACE__.'\Foo', 'test']);
call_user_func([__NAMESPACE__.'\Foo', 'sayHello']);


$foo = new \Foo()
