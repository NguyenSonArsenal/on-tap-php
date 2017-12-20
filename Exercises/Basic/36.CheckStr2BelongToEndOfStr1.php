<?php

echo " ?  Write a PHP program to test if a given string occurs at the end of another given string";

echo "<br>";
echo "==============================";
echo "<br>";

function checkStr2BelongToEndOfStr1($str1, $str2)
{
    $lengthStr2 = strlen($str2);
    
    $strTmp = substr($str1, -$lengthStr2);
    
    echo $str2 . '<br>';
    echo $strTmp . '<br>';
    
    
    if ($strTmp === $str2)
    {
        return true;
    }
    else
    {
        return false;
    }
}

$result = checkStr2BelongToEndOfStr1('VietNam', 'am');
var_dump($result);