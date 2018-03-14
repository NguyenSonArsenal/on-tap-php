<?php
echo " ? Write a PHP script to print \"second\" and \"Red\" from the following array";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$color = array (
    "color"     => array ( "a" => "Red", "b" => "Green", "c" => "White"),
    "numbers"   => array ( 1, 2, 3, 4, 5, 6 ),
    "holes"     => array ( "First", 5 => "Second", "Third")
);

echo '<pre>';
print_r($color);

echo $color['holes'][5];

echo '<br>';

echo $color['color']['a'];

