<?php
namespace oop\call_user_function;
// call function and pass first paramatter

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


$foo = new Foo();
