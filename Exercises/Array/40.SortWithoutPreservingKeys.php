<?php
echo " ? Write a PHP program to get a sorted array without preserving the keys";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$colors = array("c1"=>"Red", "c2"=>"Green", "c3"=>"Yellow", "c4"=>"Red");

$my_array = array("red", "black", "green", "black", "white", "yellow");

arsort($colors);

echo '<pre>';
print_r($colors);
