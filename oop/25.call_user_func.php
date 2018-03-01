<?php

// call function and pass a paramatter

function getName($name)
{
    echo "Hello $name" . '<br>';
}

function getNumber($number)
{
    echo "Number $number <br>";
}

call_user_func('getName', 'Nguyen Van A');
call_user_func_array('getNumber', [1,2,3]);

function foobar($agr1, $agr2)
{
    echo __METHOD__ . " got $agr1 and $agr2 <br>";
}

class foo
{
    function bar($agr1, $agr2)
    {
        echo __METHOD__ . " got $agr1 and $agr2 <br>";
    }
}

// call function foobar with 2 arguments
call_user_func_array('foobar', ['one', 'two']);

$foo = new foo();
call_user_func_array([$foo, 'bar'], ['three', 'four']);

function mega(&$a)
{
    $a = 55;
    echo "function mega \$a = $a <br>";
}

$bar = 77;
call_user_func_array('mega', [&$bar]);

echo "global \$bar = $bar <br>";
