<?php

echo " ?  Write a PHP program to find the first non-repeated character in a given string.";

echo "<br>";
echo "==============================";
echo "<br>";

function checkElementBelongToArray($char, $arr)
{
    $length = count($arr);
    
    for($i = 0; $i<$length; $i++)
    {
        if($char == $arr[$i])
        {
            return true;
        }
    }
    return false;
}

function getFirstNonRepeatedCharacter($str)
{
    $arrStrFromStr = str_split($str);
    
    $length = count($arrStrFromStr);
    
    for ($i = 0; $i<$length; $i++)
    {
        $tmp = array();
        
        for ($j = $i+1; $j < $length; $j ++)
        {
            $tmp[] = $arrStrFromStr[$j];
        }
        
        $check = checkElementBelongToArray($arrStrFromStr[$i], $tmp);
        
        if($check)
        {
            continue;
        }
        else
        {
            return $arrStrFromStr[$i];
        }
    }
}

$str = "abcdea"; // 5

$result = getFirstNonRepeatedCharacter($str);

if ($result)
{
    echo 'First non-repeated character in "' . $str . '" is ' . $result;
}
else
{
    echo "All character is duplicated";
}

