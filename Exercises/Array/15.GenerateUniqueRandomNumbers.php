<?php
echo " ? Write a PHP script to generate unique random numbers within a range";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

function getRandomNumbers($min, $max, $count)
{
    if ($count > (($max - $min)+1))
    {
        return false;
    }
    $values = range($min, $max);
    shuffle($values); // Assign new key (follow index) and mix elements of arrray
    return array_slice($values,0, $count); // cut array
}

echo '<pre>';
print_r(getRandomNumbers(11, 20, 5));