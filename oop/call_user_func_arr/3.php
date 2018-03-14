<?php

echo 'Example #3 Using lambda function <br>';

$func = function ($a, $b) {
    echo $a + $b;
};


call_user_func_array($func, [2,4]);