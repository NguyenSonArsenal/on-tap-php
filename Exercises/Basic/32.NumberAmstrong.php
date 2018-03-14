<?php

echo " ? Write a PHP program to check if a number is an Armstrong number or not.
 Return true if the number is Armstrong otherwise return false";
echo "<br>";
echo "==============================";
echo "<br>";

function countDigit($number)
{
    return strlen((string) $number);
}

function checkAmstrong($n)
{
    $ki_tu_phan_tram = (int)($n / 100);
    $ki_tu_pham_chuc= ($n / 10) % 10;
    $ki_tu_phan_don_vi = $n % 10;
    
    if ($ki_tu_phan_tram**3 + $ki_tu_pham_chuc**3 + $ki_tu_phan_don_vi**3 == $n)
    {
        return true;
    }
    return false;
}

$n = 153;

if (is_int($n))
{
    if (countDigit($n) == 3)
    {
        if (checkAmstrong($n))
        {
            echo "$n is Amstrong number";
        }
        else
        {
            echo "$n is not Amstrong number";
        }
    }
    else
    {
        echo "Number init must have 3 digits";
    }
}
else
{
    echo "not int";
}