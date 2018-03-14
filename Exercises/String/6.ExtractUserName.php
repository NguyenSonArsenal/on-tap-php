<?php
echo "Write a PHP script to extract the user name from the following email ID." ;

echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$test =  'vanson297.nguyen@gmail.com';

echo 'Init str: ' . $test . '<br>';

$arrSplitFromString = explode("@",$test);
echo "User name is: " .  $arrSplitFromString[0];

echo "<br>";
echo "==============================";
echo "<br>";

// Cach 2
$result = strstr($test, "@", true);

echo "User name is: " .  $result;

