<?php

require '../helper.php';

$arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

echo 'INIT: ' . "<br>";

function printArrSort($arr)
{
    foreach ($arr as $key => $value)
    {
        echo $key .' : ' . $value;
        echo '<br>';
    }
}

printArrSort($arr);

echo '<br>';
echo " + Ascending belong to value <br>";
asort($arr);
printArrSort($arr);

echo '<br>';
echo ' + Ascending belong to key' . '<br>';
ksort($arr);
printArrSort($arr);

echo '<br>';
echo ' + Descending belong to value' . '<br>';
arsort($arr);
printArrSort($arr);

echo '<br>';
echo ' + Descending belong to key' . '<br>';
asort($arr);
printArrSort($arr);

echo "<br>";
echo "==============================";
echo "<br>";






