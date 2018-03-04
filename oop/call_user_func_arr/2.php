<?php
namespace oop\call_user_func_arr;

echo 'Example #2 call_user_func_array() using namespace name <br>';

class Foo
{
    public static function test($name)
    {
        echo "Hello $name <br>";
    }
}

call_user_func_array(__NAMESPACE__.'\Foo::test', ['Son']);
call_user_func_array([__NAMESPACE__.'\Foo', 'test'], ['Min']);