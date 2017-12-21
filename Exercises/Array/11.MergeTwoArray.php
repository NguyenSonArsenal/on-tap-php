<?php
echo " ? Write a PHP program to merge (by index) the following two arrays";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
$array3 = array(1, 2);

$result = array();

$result[] = $array1;
$result[] = $array2;


$length = count($array1);

//foreach ($array1 as $key => $value)
//{
//    $value2 = $array2[$key];
//    //$value+=$value2;
//    $result[$key] = $value + $value2;
//}

echo '<pre>';
print_r($result);

// chua hoan thanh



