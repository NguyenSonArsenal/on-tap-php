<?php
echo " ? Write a PHP script to get an array containing all the entries of an array
which have the keys that are present in another array";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$arr1 = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
$arr2 = array('c2', 'c4');

function getEntries ($arr1, $arr2)
{
    $tmpValue = [];
    
    foreach ($arr1 as $key => $value)
    {
        if (in_array($key, $arr2))
        {
            $tmpValue[] = $value;
        }
    }
    
    if (count($tmpValue) ==0)
    {
        echo 'The keys in arr1 is not exits in arr2';
        return false;
    }
    
    return array_combine($arr2, $tmpValue);
}

$result = getEntries ($arr1, $arr2);

if ($result)
{
    echo '<pre>';
    print_r($result);
}


