<?php
echo " ? Write a PHP script to merge two commas separated lists with unique value only";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$arr1 = array(2,9,0,7,1,9,9,5);
$arr2 = array(2,3,0,8,2,0,0,0,6,0,3,8);

function mergerArrayToUniqueValue($list1, $list2)
{

}

echo "<pre>";
print_r(array_values(array_unique(array_merge($arr1, $arr2))));

