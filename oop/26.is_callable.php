<?php

function foo(){};

echo 'Is_callable foo function: ' ;
var_dump(is_callable('foo')) ;

class IsCallable
{
    function __construct()
    {
        if (method_exists($this, 'call'))
            echo 'call function is exit <br>';
        else
            echo 'call function is not exit <br>';
    }
    function call(){}
}

$foo = new IsCallable();
echo 'Is_callable call function: ' ;
var_dump(is_callable([$foo, 'call'])) ;

echo '<br>';

echo 'Is_callable call123 function: ' ;
var_dump(is_callable([$foo, 'call123'])) ;


