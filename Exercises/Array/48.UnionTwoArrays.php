<?php
echo " ? Write a PHP function to set union of two arrays";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$a = array(1, 2, 3, 4);
$b = array(2, 3, 4, 5, 6);

echo 'init array a: ';
printValueArray($a);
echo 'init array b: ';
printValueArray($b);

function arrayUnion($arr1, $arr2)
{
    $arrUnion = array_merge(
        array_diff($arr1, $arr2),
        array_intersect($arr1, $arr2),
        array_diff($arr2, $arr1)
    );
    
    return $arrUnion;
}

$result = arrayUnion($a, $b);

echo 'Merge array a with array b: ';
printValueArray($result);


