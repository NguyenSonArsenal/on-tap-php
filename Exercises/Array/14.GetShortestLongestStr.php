<?php
echo " ?  Write a PHP script to get the shortest/longest string length from an array";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$input = array("abcd","abc","de","hjjj","g","wer");

$length = count($input);

for($i=0; $i<$length; $i++)
{
    echo "Element \"$input[$i]\" has length = " . strlen($input[$i]) . '<br>';
}

// Convert array to an array of string lengths


echo '<br>';
echo '------';
echo '<br>';

function getArrMaxlength($arr)
{
    $lengths = array_map('strlen', $arr);
    
    $length = count($arr);
    
    $maxLength = max($lengths);
    
    $arrMaxLength = array();
    
    for($i=0; $i<$length; $i++)
    {
        if (strlen($arr[$i]) == $maxLength)
        {
            array_push($arrMaxLength, $arr[$i]);
        }
    }
    
    return $arrMaxLength;
}

function getArrMinlength($arr)
{
    $lengths = array_map('strlen', $arr);
    
    $length = count($arr);
    
    $minLength = min($lengths);
    
    $arrMinLength = array();
    
    for($i=0; $i<$length; $i++)
    {
        if (strlen($arr[$i]) == $minLength)
        {
            array_push($arrMinLength, $arr[$i]);
        }
    }
    
    return $arrMinLength;
}

$arrMaxLength = getArrMaxlength($input);
echo '<pre>';
print_r($arrMaxLength);
echo 'The longest array length is ' . strlen($arrMaxLength[0]);

echo '<br>';
echo '------';
echo '<br>';

$arrMinLength = getArrMinlength($input);
echo '<pre>';
print_r($arrMinLength);
echo 'The shortest array length is ' . strlen($arrMinLength[0]);


