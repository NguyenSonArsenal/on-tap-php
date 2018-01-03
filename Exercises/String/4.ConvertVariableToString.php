<?php
echo "Write a PHP script to convert the value of a PHP variable to string" ;

echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$test = 123;

echo 'Init test: ';
var_dump($test);
echo '<br>';

echo 'Convert to string: ';
var_dump((string)$test);

