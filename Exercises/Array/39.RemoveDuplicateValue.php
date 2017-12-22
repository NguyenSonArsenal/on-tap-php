<?php
echo " ? Write a PHP program to remove duplicate values
from an array which contains only strings or only integers";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$arrString = array('n', 'g', 'u', 'y', 'e', 'n', 'v', 'a', 'n', 's', 'o', 'n');

$total = count($arrString);

printValueArray($arrString);

echo "Length init is $total <br>";

$arrString = array_unique($arrString);

printValueArray($arrString);

echo "Length init is " . count($arrString) . "<br>";



