<?php
echo " ?  Write a PHP program to filter out some elements with certain key-names";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$arr1 = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
$arr2 = array('c2', 'c4', 'c3');

function filterArray ($arr1, $arr2)
{
    $tmpFilterValue = [];
    $tmpFilterKey = [];
    
    foreach ($arr1 as $key => $value)
    {
        if (!in_array($key, $arr2))
        {
            $tmpFilterKey[] = $key;
            $tmpFilterValue[] = $value;
        }
    }
    
    return array_combine($tmpFilterKey, $tmpFilterValue);
}

$result = filterArray($arr1, $arr2);

echo '<pre>';
print_r($result);