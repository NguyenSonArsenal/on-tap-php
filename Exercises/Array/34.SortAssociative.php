<?php
echo " ?  Write a PHP program to sort an associative array
(alphanumeric with case-sensitive data) by values";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$array = array(
    0 => 'example1',
    1 => 'Example11',
    2 => 'example10',
    3 => 'Example6',
    4 => 'example4',
    5 => 'EXAMPLE40',
    6 => 'example10'
);

sort($array, SORT_NATURAL | SORT_FLAG_CASE );

echo '<pre>';
print_r($array);