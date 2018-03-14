<?php
echo " ?  Write a PHP program to get the index of the highest value in an associative array";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$arr = array(
    'value1' => 3021,
    'value2' => 2365,
    'value3' => 5215,
    'value4' => 57214,
    'value5' => 2145
);
echo 'INIT ARRAY: ' . '<BR>';
echo '<pre>';
print_r($arr);

function getIndexOfHighestValue($arr)
{
    $total = count($arr);
    
    $arrValues = array_values($arr);
    $arrKeys = array_keys($arr);
    
    $maxValue = max($arrValues);
    
    foreach ($arrKeys as $key => $value)
    {
        if ($arr[$value] == $maxValue)
        {
            return $arrKeys[$key];
        }
    }
}

$indexMax = getIndexOfHighestValue($arr);
echo 'Index max of array is ' . $indexMax;



