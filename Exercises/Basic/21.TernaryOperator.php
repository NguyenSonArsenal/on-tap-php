<?php

echo "?  Write a PHP function to test whether a number is greater
than 30, 20 or 10 using ternary operator.";

echo "<br>";
echo "<br>";

function checkNumber($n) {
  switch($n):
    case ($n > 30):
      echo "$n greater than 30 <br>";
      break;
    case $n > 20:
      echo "$n greater than 20 <br>";
      break;
    case $n > 10:
      echo "$n greater than 10 <br>";
      break;
    default:
      echo '$n = ' . $n;
  endswitch;
}

checkNumber(1133);

// Cach 2

function check($n) {
  $result = $n > 30 ? "$n greater than 30" :
          (($n > 20) ? "$n greater than 20" :
            ($n > 10) ? "$n greater than 10" :
              "$n smaller than 10"
          );
  return $result;
}

$result = check(2345);
echo $result;
