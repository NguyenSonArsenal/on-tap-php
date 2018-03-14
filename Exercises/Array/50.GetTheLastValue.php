<?php
echo " ? Write a PHP script to get an array containing all the entries of an array
which have the keys that are present in another array";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$arr1 = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');

function getLastValue($arr)
{
    $total = count($arr);
    
    $arrKeys = array_keys($arr);
    
    $valueResult = [];
    $keyReuslt = [];
    
    $keyReuslt[] = $arrKeys[$total-1];
    
    foreach ($arr as $key => $value)
    {
        if($key == $keyReuslt[0])
        {
            $valueResult[] = $value;
        }
    }
    
    return array_combine($keyReuslt, $valueResult);
}

print_r(getLastValue($arr1));


