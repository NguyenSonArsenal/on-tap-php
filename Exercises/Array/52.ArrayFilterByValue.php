<?php
echo " ? Write a PHP function to filter a multi-dimensional array.
The function will return those items that will match with the specified value";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$colors = array(
    0 => array('key1' => 'Red', 'key2' => 'Green', 'key3' => 'Black', 'test'=>'PHP'),
    1 => array('key1' => 'Yellow', 'key2' => 'White', 'key3' => 'Pink'),
    2 => array('test'=>'PHP', 'ok'=>'say yeah')
);

function arrayFilterByValue($arr, $index, $needle)
{
    $tmp = [];
    
    // get value of paramater index
    foreach ($arr as $key => $value)
    {
        if (!empty($arr[$key][$index]))
        {
            $tmp[$key] = $arr[$key][$index];
        }
    }
    
    $arrKeysResult = array();
    
    // get key result of arr input
    foreach ($tmp as $key => $val)
    {
        if ($needle === $val)
        {
            $arrKeysResult[] = $key;
        }
    }
    
    $result = [];
    
    foreach ($arr as $key => $value)
    {
        if (in_array($key, $arrKeysResult))
        {
            $result[$key] = $value;
        }
    }
    
    return $result;
}

$result = arrayFilterByValue($colors, 'test', 'PHP');

echo '<pre>';
print_r($result);