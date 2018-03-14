<?php

echo " ?  Write a PHP program to test if a given string occurs at the end of another given string";

echo "<br>";
echo "==============================";
echo "<br>";

function caculateMod($n1, $n2)
{
    return $n1%$n2;
}

$x = 13;
$y = 5;

$result = caculateMod($x, $y);
echo "$x mod $y = $result";