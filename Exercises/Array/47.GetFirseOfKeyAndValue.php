<?php
echo " ? Write a PHP function to get an array with the first key and value";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$colors = array('c1'=>'Red','c2'=>'Green','c3'=>'Black');

function array1stElement($arr)
{
    foreach ($arr as $key => $value)
    {
        $firstKey[] = $key;
        $firstValue[] = $value;
        
        break;
    }
    
    $result = array_combine($firstKey, $firstValue);
    
    return $result;
}

echo 'Init array: ';
echo '<pre>';
print_r($colors);

echo 'Get 1st element from array is: ';
$result = array1stElement($colors);
echo '<pre>';
print_r($result);

