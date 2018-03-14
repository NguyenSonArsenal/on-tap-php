<?php
echo "Write a PHP script to format values in currency style" ;

echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$value1 = 65.45;
$value2 = 104.35;

$result = $value1 + $value2;
$result = number_format($result, 2);
echo $result;

