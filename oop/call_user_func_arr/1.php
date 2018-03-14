<?php

function foobar($a, $b)
{
    echo __FUNCTION__. " got $a and $b <br>";
}

class Foo
{
    public function bar($a, $b)
    {
        echo __METHOD__. " got $a and $b <br>";
    }
}

call_user_func_array('foobar', ['one', 'two']);

$foo = new Foo();
call_user_func_array([$foo, 'bar'], ['three', 'four']);