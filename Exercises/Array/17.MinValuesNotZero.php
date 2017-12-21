<?php
echo " ? Write a PHP function that returns the lowest integer that is not 0";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$arr = array(2,9,9,0,3,9,9,5);

function minValueNotZero($arr)
{
    $min = min($arr);
    
    if($min == 0)
    {
        $index = getIndexItemArray(0, $arr);
        array_splice($arr, $index, 1);
        $min = min($arr);
    }
    
    return $min;
}

$min = minValueNotZero($arr);

echo "Value min in array ";
printValueArray($arr);
echo "is " . $min;
