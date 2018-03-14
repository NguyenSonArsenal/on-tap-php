<?php
echo " ? Write a PHP function to convert a string to an array
(trimming every line and remove empty lines)";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';


$subArr = array_fill(0, 4, 10);

$result = array_fill(0, 4, $subArr);

echo '<pre>';
print_r($result);
