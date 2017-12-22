<?php
echo " ? Write a PHP script to sort an array in reverse order (highest to lowest)";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$colors = array("Red", "Orange", "Black", "White");

function decending(&$arr)
{
    $total = count($arr);
    
    for($i=0; $i<$total; $i++)
    {
        for($j=$i+1; $j<$total; $j++)
        {
            if($arr[$i] < $arr[$j])
            {
                swap($arr[$i], $arr[$j]);
            }
        }
    }
}

decending($colors);

echo '<pre>';
print_r($colors);

// Cach 2

// Using rsort($array)



