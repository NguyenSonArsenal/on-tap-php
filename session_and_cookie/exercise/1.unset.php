<?php

$x = 124;

echo 'Before using unset then value of $x is: ' . $x . '<br>';

unset($x);

if(isset($x))
    echo 'After using unset then value of $x is: ' . $x . '<br>';
else
    echo '$x is unsetted';