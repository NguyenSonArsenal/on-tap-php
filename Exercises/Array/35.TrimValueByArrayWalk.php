<?php
echo " ? Write a PHP script to trim all the elements in an array using array_walk function.";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$array = array('  red ef  ', ' green gre ', '    black bl  ', '       white   wh    ');

echo 'INIT: ' . '<br>';
echo '<pre>';
print_r($array);

function trimValue(&$value,$key)
{
    $value = trim($value);
}

array_walk($array,"trimValue");

echo 'After trim: ' . '<br>';

echo '<pre>';
print_r($array);