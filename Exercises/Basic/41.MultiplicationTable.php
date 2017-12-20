<?php

echo " ?  Write a PHP program to print out the multiplication table upto 6*6";

echo "<br>";
echo "==============================";
echo "<br>";

function createMatrix ($tr, $td)
{
    for ($i = 1; $i <= $tr; $i ++)
    {
        for($j = 1; $j <= $td; $j ++)
        {
            echo(rand(0,99)) . '&nbsp&nbsp&nbsp';
        }
        echo '<br>';
    }
}

$tr = 3;
$td = 6;

if ( 0<$tr && $tr<=6 && 0<$td && $td<=6 )
{
    createMatrix($tr, $td);
}

