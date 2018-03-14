<?php

echo "? Write a PHP program to swap two variables.";

echo "<br>";
echo "<br>";

$x = 15;
$y = 5;

function swap(&$x, &$y) {
  $tmp = $x;
  $x = $y;
  $y = $tmp;
}

echo 'Init $x = ' . $x . ' $y = '. $y . '<br>';
swap($x, $y);

echo 'After swap: $x = ' . $x . ' $y = '. $y . '<br>';