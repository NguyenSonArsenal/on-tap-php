<?php

echo " ? Write a PHP program to remove duplicates from a sorted list";
echo "<br>";
echo "==============================";
echo "<br>";

$input = array(2,9,2,0,7,1,9,9,5);

function checkElementBelongToArray($n, $arr)
{
    $length = count($arr);
    
    for($i = 0; $i<$length; $i++)
    {
        if($n == $arr[$i])
        {
            return true;
        }
    }
    return false;
}

function unique($arr)
{
    $length = count($arr);
    $result = array();
    
    echo 'Length: ' . $length . '<br>';
    
    for ($i=0; $i<$length; $i++)
    {
        $tmp = array();
        
        for($j=$i+1; $j<$length; $j++)
        {
            $tmp[] = $arr[$j];
        }
        
        echo '<pre>';
        
        $check = checkElementBelongToArray($arr[$i], $tmp);
        
        if(!$check)
        {
            $result[] = $arr[$i];
        }
    }
    return $result;
}

$result = unique($input);

echo '<pre>';
print_r($result);

// Cach 2

echo '==============================';

function removeDuplicate($arr)
{
    return array_values(array_unique($arr));
}

$result = removeDuplicate($input);

echo '<pre>';
print_r($result);

// Cach 3
function remove_duplicated_values($array)
{
    $newArray = array();
    foreach($array as $key=>$val)
    {
        $newArray[$val] = 1;
    }
    return array_keys($newArray);
}

$result = remove_duplicated_values($input);

echo '<pre>';
print_r($result);