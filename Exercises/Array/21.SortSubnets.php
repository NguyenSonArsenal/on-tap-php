<?php
echo " ? Write a PHP function to sort subnets";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$arr = array(
    '192.169.12',
    '192.167.11',
    '192.169.14',
    '192.168.13',
    '192.167.12',
    '122.169.15',
    '192.167.16'
);


echo "Array init: <br>";
echo '<pre>';
print_r($arr);

function sortSubnets($a, $b)
{
    return strcmp($a, $b);
}

// sort and assign new key for array
usort($arr, 'sortSubnets');

echo "Array after sort subnets : <br> ";
echo '<pre>';
print_r($arr);

