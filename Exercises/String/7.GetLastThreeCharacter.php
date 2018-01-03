<?php
echo "Write a PHP script to get the last three characters of a string" ;

echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$test =  'vanson297.nguyen@gmail.com12cd';

echo 'Init str: ' . $test . '<br>';

$result = substr($test, -3);

echo "Last three character in $test is $result";

