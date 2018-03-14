<?php

echo 'Example #4 Passing values by reference<br>';

function mega(&$a)
{
    $a = 55;
    echo "mega() \$a = $a <br>";
}

$bar = 77;
call_user_func_array('mega', [&$bar]);

echo "global \$bar = $bar <br>";