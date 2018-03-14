<?php
echo " ? Write a PHP script to do a multi-dimensional difference,
i.e. returns values of the first array that are not in the second array";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$color = array( array('Red', 80), 0, 5 ,array('Green', 70), array('white', 60), 2, 9 );

$color2 = array( array('Green', 70), array('Black', 95) , 2 );

function getDiffrence($a, $b)
{
    if ($a===$b)
    {
        return 0;
    }
    return ($a>$b) ? 1 : -1; // Hoi lai cho nay
}

$result = array();

$result = array_udiff($color,$color2, "getDiffrence");

echo '<pre>';
print_r($result);
