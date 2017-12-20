<?php

echo " ?Write a PHP program to convert word to digit";
echo "<br>";
echo "==============================";
echo "<br>";

$str = "zero;three;five;six;eight;one";

$data = array(
    'zero'      => '0',
    'one'       => '1',
    'two'       => '2',
    'three'     => '3',
    'four'      => '4',
    'five'      => '5',
    'six'       => '6',
    'seven'     => '7',
    'eight'     => '8',
    'nine'      => '9',
);

function convertWordToDigit($data, $str)
{
    $arrStrInput = explode(';', $str);

    $length = count($arrStrInput);
    
    $result = '';
    
    for ($i = 0; $i < $length; $i++)
    {
         $result .= $data[$arrStrInput[$i]];
    }
    
    return $result;
}

$result = convertWordToDigit($data, $str);
echo $result;
echo '<br>';
var_dump($result);
