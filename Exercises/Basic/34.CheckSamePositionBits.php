<?php

echo " ?  Write a PHP program to check the bits of the two given positions of a number are same or not.";
echo "<br> Example: <br>
112 - > 01110000 <br>
Test 2nd and 3rd position <br>
Result: True <br>
Test 4th and 5th position <br>
Result: False <br>";

echo "<br>";
echo "==============================";
echo "<br>";

$n = 112;

$strBinary = base_convert($n, 10, 2);
echo 'Input is ' . $strBinary . '<br>';

function checkSamPositionBits($binary, $x, $y)
{
    $arrStr = str_split($binary);
    $count = count($arrStr);
    
    if (0 <= $x && $x <= $count && 0 <= $y && $y<= $count)
    {
        if ($arrStr[$x] == $arrStr[$y]) {
            return true;
        }
    }
    else
    {
        echo 'Input wrong. Please check your input' . '<br>';
    }
    return false;
}

$x = 20;
$y = 1;

echo "Test position $x and $y <br>";
$check = checkSamPositionBits($strBinary, $x, $y);
echo "Result: ";

if($check)
{
    echo " True";
}
else
{
    echo "False";
}