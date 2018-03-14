<?php

$arr = array(1,2,3,4,5);

echo 'Init array: ';
foreach ($arr as $value)
{
    echo $value . '&nbsp&nbsp&nbsp';
}

echo '<br>';

array_splice($arr, 3, 0, '$');

echo 'Result: ';
foreach ($arr as $value)
{
    echo $value . '&nbsp&nbsp&nbsp';
}

