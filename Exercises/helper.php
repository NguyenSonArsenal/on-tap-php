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

function checkItemBelongArray($n, $arr)
{
    $length = count($arr);
    
    for($i=0; $i<$length; $i++)
    {
        if($arr[$i] == $n)
        {
            return true;
        }
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