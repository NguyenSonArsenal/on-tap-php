<?php
echo " ? Write a PHP script to get the largest key in an array";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

$keys = array();

foreach ($arr as $key => $value)
{
    array_push($keys, $key);
}

echo ' + Arr init: ' . '<br>';
printKeyValueArray($arr);

echo '-----';
echo '<br>';

echo "Largest key in an array is " . max($keys);
