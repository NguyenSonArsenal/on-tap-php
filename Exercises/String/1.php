<?php
echo " 1. Write a PHP script to :<br>
a) transform a string all uppercase letters. <br>
b) transform a string all lowercase letters. <br>
c) make a string's first character uppercase.<br>
d) make a string's first character of all the words uppercase. <br>" ;

echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$str = "Vi du mot chuoi trong PHP";

echo "Init string: " . $str . '<br>';

echo "<br>";
echo "==============================";
echo "<br>";

echo "transform a string all uppercase letters <br>";
echo strtoupper($str);


echo "<br>";
echo "==============================";
echo "<br>";

echo "transform a string all lowercase letters <br>";
echo strtolower($str);

echo "<br>";
echo "==============================";
echo "<br>";

echo "make a string's first character uppercase <br>";
echo ucfirst($str);

echo "<br>";
echo "==============================";
echo "<br>";

echo "make a string's first character of all the words uppercase.<br>";
echo ucwords($str);