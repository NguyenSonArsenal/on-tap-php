<?php

// Toan tu so hoc trong php (6): + - * / % va **(luy thua)

$x = 2;
$y = 9;

echo '$x = ' . $x . ' $y = ' .$y . '<br>' . '<br>';

echo '$x + $y = ' . ($x + $y) . '<br>'; // -7
echo '$x - $y = ' . ($x - $y) . '<br>'; // -7
echo '$x * $y = ' . ($x * $y) . '<br>'; // 18
echo '$x / $y = ' . ($x / $y) . '<br>'; // 0,2222
echo '$x % $y = ' . ($x % $y) . '<br>'; // 2
echo '$x ** $y = ' . ($x ** $y) . '<br>'; // 512

echo '<br>';
echo '============================';
echo '<br>';

// Toan tu gan trong PHP (6): = += -= *= /= %=

$x = 50;
echo '$x = ' . $x . '<br>';
echo 'Value $x += 10 : ' . ($x+=10) . '<br>';
echo 'Value $x -= 10 : ' . ($x-=10) . '<br>';
echo 'Value $x *= 10 : ' . ($x*=10) . '<br>';
echo 'Value $x /= 10 : ' . ($x/=10) . '<br>';
echo 'Value $x %= 10 : ' . ($x%=10) . '<br>';

echo '<br>';
echo '============================';
echo '<br>';

// Toan tu so sanh trong PHP (9): == === > < >= <= !== <> !=

$x = 50;
$y = 20;

// So sanh bang
var_dump($x == $y);
echo '<br>';

// so sanh khong bang
var_dump($x != $y);
echo '<br>';
var_dump($x != $y);
echo '<br>';

// So sanh loai va gia tri
$x = 50;
$y="50";
var_dump($x===$y);
echo '<br>';

// So sanh khong cung loai
$x = 50;
$y = 'Hello';
var_dump($x!==$y);
echo '<br>';

// So sanh lon hon
$x = 50;
$y = 51;
var_dump($x>$y);
echo '<br>';
var_dump($x>=$y);
echo '<br>';
var_dump($x<$y);
echo '<br>';
var_dump($x<=$y);
echo '<br>';

echo '<br>';
echo '============================';
echo '<br>';

// Toan tu tang/ giam (4) : ++$x, $x++, --$x, $x--
$x = 5;

echo 'Init $x = ' . $x . '<br>';

echo '$x = ' . $x++. '<br>'; // 5
echo '$x = ' . ++$x. '<br>'; // 7
echo '$x = ' . $x--. '<br>'; // 7
echo '$x = ' . --$x. '<br>'; // 5

echo 'End $x = ' . $x . '<br>';

// Toan tu logic (6) : and && or || xor !






