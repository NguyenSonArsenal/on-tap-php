<?php

echo " ? Write a PHP program to compute the sum of the digits of a number";
echo "<br>";
echo "==============================";
echo "<br>";

$n = 153346;

function countDigit($number)
{
    return strlen((string) $number);
}

function totalDigitOfNumber($n)
{
    $length = countDigit($n);
    $total = 0;
    $arrCharacter = str_split((string)$n);
    
    for ($i = 0; $i<$length; $i++)
    {
        $total += $arrCharacter[$i];
    }
    
    return $total;
}

if (is_int($n))
{
    $result = totalDigitOfNumber($n);
    echo "Total digit of no $n is " . $result;
}
else
{
    echo "not int";
}

echo '=============';
echo "<br>";

// Cach2

$length = strlen((string)$n);
$total = 0;

$str = (string)$n;

for($i=0; $i<$length; $i++)
{
    $total+=$str[$i];
}
echo $total;