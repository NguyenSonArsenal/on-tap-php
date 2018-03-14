<?php

if (5 > 3) {
  echo "5 bigger than 3" . '<br>';
} else {
  echo 'Nothing to say !!!' . '<br>';
}

echo '<br>';
echo '============================';
echo '<br>';

$a = 3;
echo '$a = ' . $a . '<br>';
if ($a > 3) {
  echo "a bigger than 3" . '<br>';
} elseif($a == 3) {
  echo "a equal 3" . '<br>';
} else {
 echo "a smaller than 3" . '<br>';
}

echo '<br>';
echo '============================';
echo '<br>';

$a = "learning PHP ";
echo '$a = ' . $a . '<br>';
if (is_int($a) && $a > 3) {
  echo "a is int and bigger than 3" . '<br>';
} else {
  echo 'a is not int' . '<br>';
}

if (is_int($a) || is_string($a)) {
  echo "a is int or string" . '<br>';
} else {
  echo 'a is not int or string' . '<br>';
}
