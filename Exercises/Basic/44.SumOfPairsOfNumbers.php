<?php

echo " ?  Write a PHP program to print out the sum of pairs of numbers of a given sorted array
 of positive integers which is equal to a given number. <br>";
echo "
array(0,1,2,3,4,5,6) <br>
find_Pairs(array, 7) <br>
Sample Output:<br>
1,6;2,5;3,4;<br> ";

echo "<br>";
echo "==============================";
echo "<br>";

function sum($arr, $n)
{
    $result = '';
    
    $length = count($arr);
    
    for ($i = 0; $i<$length; $i++)
    {
        for($j=$i+1; $j<$length; $j++)
        {
            if($arr[$i] + $arr[$j] == $n)
            {
                $result .= $arr[$i] . '+' . $arr[$j] . '; ';
            }
            else
            {
                continue;
            }
        }
    }
    
    return $result;
}

$arr = [1,2,3,4,5,6,7,8,9];
$n = 12;

$result = sum($arr, $n);

if($result)
{
    echo "$n = " . $result;
}
else
{
    echo 'Not valid'; // Khong hop le;
}
