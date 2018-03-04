<?php

echo 'Example #4 Using a class method with call_user_func() <br>';

class MyClass
{
    public static function sayHello()
    {
        echo 'Hello! <br>';
    }

    public function xinchao()
    {
        echo 'Chao moi nguoi <br>';
    }
}


$myObj = new MyClass();
call_user_func([$myObj, 'xinchao']);

// C2
$myclass = 'MyClass';
call_user_func($myclass. '::sayHello');

// c3
call_user_func([$myclass, 'sayHello']);
call_user_func([$myclass, 'xinchao']);