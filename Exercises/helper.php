<?php

function printValueArray($arr)
{
    $length = count($arr);
    
    foreach ($arr as $key => $value)
    {
        if ($key != $length - 1)
        {
            echo $value . ' &nbsp&nbsp&nbsp ';
        }
        else
        {
            echo $value . ' &nbsp';
        }
    }
    
    echo '<br>';
}

function printKeyValueArray($arr)
{
    foreach ($arr as $key => $value)
    {
        echo $key . ' : ' . $value . '<br>';
    }
}

function swap(&$x, &$y)
{
    $tmp = $x;
    $x = $y;
    $y = $tmp;
}

function checkItemBelongArray($item, $arr)
{
    $length = count($arr);
    
    for($i=0; $i<$length; $i++)
    {
        if($arr[$i] === $item)
        {
            return true;
        }
    }
    
    return false;
}


/**
 * check substring has belong to string
 * @param $string
 * @param $substring
 */
function checkStringInsideAnother($string, $substring)
{
    if(strpos($string, $substring) !== false)
    {
        return true;
    }
    
    return false;
}

function getIndexItemArray($n, $arr)
{
    $length = count($arr);
    
    for($i=0; $i<$length; $i++)
    {
        if($arr[$i] == $n)
        {
            return $i;
        }
    }
    
    return false;
    
}

function checkChareaterBelongString($char, $str)
{
    if (is_string($str) && is_string($str) && strlen($char) > 0 )
    {
        return strpos($str, $char);
    }
    
    return false;
}

function sumCharsOfNumber($n)
{
    $length = strlen((string)$n);
    
    $sum=0;
    
    for($i=0; $i<$length; $i++)
    {
        $sum+=((string)$n)[$i];
    }
    
    return $sum;
}

// Function check key belong to array

// get key from associate array
function getAllKeys($arr, &$arrKeys = array())
{
    foreach ($arr as $key => $value)
    {
        array_push($arrKeys, $key);
        
        if(is_array($value))
        {
            getAllKeys($value, $arrKeys);
        }
    }
    
    return (array_values(array_unique($arrKeys)));
}

function checkKeyBelongArray($arr, $key)
{
    $length = count($arr);
    
    for($i=0; $i<$length; $i++)
    {
        if ($key === $arr[$i])
        {
            return true;
        }
    }
    
    return false;
}
// END function check key belong to array


/**
 * check a string belong to array values in array index
 * @param $str
 * @param $arrValues
 */
function checkStringBelongToArrayValue($str, $arrValues)
{
    $total = count($arrValues);
    
    for($i=0; $i<$total; $i++)
    {
        if ($str === $arrValues[$i])
            return true;
    }
    
    return false;
}


/**
 * Function convert ascii to char
 * @param $low
 * @param $high
 * @param $n: length need to get
 * @param array $result: array geted
 */
function getCharFromAscii($low, $high, $n, &$result = array())
{
    for($i=0; $i<$n; $i++)
    {
        $x = rand($low, $high);
        array_push($result, chr($x));
    }
}