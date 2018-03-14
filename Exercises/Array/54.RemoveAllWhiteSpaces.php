<?php
echo " ? Write a PHP script to get an array containing all the entries of an array
which have the keys that are present in another array";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$array = array(15, null, "  ", -2, NULL, "", " \n", "Red   ", 54, "\t");

echo "init array:";
echo '<pre>';
print_r($array);



$total = count($array);

//echo "leng = " . strlen($array[2]) . '<br>';

foreach ($array as $key => $value)
{
    $array[$key] = trim($value);
}

echo '<pre>';
print_r(array_filter($array));