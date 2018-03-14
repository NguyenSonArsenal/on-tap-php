<?php

echo '<br>=====ex1=====<br>';

function increment(&$var)
{
    $var++; // $var = $var+ 1;
}

$a=0;

call_user_func('increment', $a);

echo $a . "\n";

call_user_func_array('increment', [&$a]);

echo $a . "\n";

// Vidu2
echo '<br>=====ex2=====<br>';

function barber($type)
{
    echo "You wanted a $type haircut, no problem <br>";
}

call_user_func('barber', 'mushroom');
call_user_func('barber', 'shave');