<?php
echo " + abs() function <br>";

echo "abs(-29) = " . abs(-29) . '<br>';
echo "abs(9) = " . abs(9) . '<br>';
echo "abs(-2.9) = " . abs(-2.9) . '<br>';

echo "<br>";
echo "==============================";
echo "<br>";

echo " + ceil() function <br>";
echo "ceil(2.12) = " . ceil(2.12) . '<br>';
echo "ceil(2.92) = " . ceil(2.92) . '<br>';
echo "ceil(-2.12) = " . ceil(-2.12) . '<br>';
echo "ceil(-2.92) = " . ceil(-2.92) . '<br>';

echo "<br>";
echo "==============================";
echo "<br>";

echo " + floor() function <br>";

echo "floor(2.12) = " . floor(2.12) . '<br>';
echo "floor(2.92) = " . floor(2.92) . '<br>';
echo "floor(-2.12) = " . floor(-2.12) . '<br>';
echo "floor(-2.92) = " . floor(-7.92) . '<br>';

echo "<br>";
echo "==============================";
echo "<br>";

echo " + sqrt() function <br>";

echo "sqrt(25) = " . sqrt(25) . '<br>';
echo "sqrt(28) = " . sqrt(28) . '<br>';
echo "sqrt(29) = " . sqrt(29) . '<br>';

echo "<br>";
echo "==============================";
echo "<br>";

echo " + decbin() function <br>";
echo "decbin(10) = " . decbin(10) . '<br>';
echo "decbin(132) = " . decbin(132) . '<br>';
echo "decbin(20) = " . decbin(20) . '<br>';

echo "<br>";
echo "==============================";
echo "<br>";

echo " + base_convert() function <br>";
$n = 10;
echo "base_convert($n) = " . base_convert($n, 10, 8) . '<br>';
