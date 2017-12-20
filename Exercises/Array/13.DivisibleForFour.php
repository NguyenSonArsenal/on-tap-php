<?php
echo " ? Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

function getNumberDevisible($k1, $k2, $n)
{
    $result = array();
    
    for ($i=$k1; $i<=$k2; $i++)
    {
        if ($i % $n == 0)
        {
            array_push($result, $i);
        }
    }
    return $result;
}

$k1 = 280;
$k2 = 250;
$n = 4;

if ($k1 > $k2)
{
    swap($k1, $k2);
}

if ($n != 0)
{
    $result = getNumberDevisible($k1, $k2, $n);
    printValueArray($result);
}
else
{
    echo 'Something in wrong';
}

