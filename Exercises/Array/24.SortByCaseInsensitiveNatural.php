<?php
echo " ?  Write a PHP script to sort an array using case-insensitive natural ordering";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$colors = array(
    "color1", "color20", "color11", "color2", "color4", "color9"
);

sort($colors, SORT_NATURAL);

echo '<pre>';
print_r($colors);

