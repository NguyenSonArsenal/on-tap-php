<?php
echo " Write a PHP script to split the following string" ;

echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$str = '290795';

echo "Init str: " . $str . '<br>';

$total = strlen($str);

$str1 = substr($str, 0, 2);
$str2 = substr($str, 2, 2);
$str3 = substr($str, 4, 2);

$strResult = $str1 . ':' . $str2 . ':' . $str3;

echo "Result: ".$strResult;