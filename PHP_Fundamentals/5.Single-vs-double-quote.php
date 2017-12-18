<?php

ini_set("display_errors", "On");

$var = "value";
echo 'Gia tri cua var la $var' . '<br>';
echo "Gia tri cua var la $var" . '<br>';

echo '<br>';
echo '============================';
echo '<br>';

$str = 'Hello text within signle quote';
echo $str . '<br>';

echo '<br>';
echo '============================';
echo '<br>';

$str1 = 'Hello text
multiple line
text within signle quoted string';

$str2 = 'Using double "quote" directly signle quoted string';
$str3 = 'Using escape sequences \n in single quoted string';

echo $str1 . '<br>';
echo $str2. '<br>';
echo $str3 . '<br>';

echo '<br>';
echo '============================';
echo '<br>';

$num1 = 10;
$str1 = 'trying variable $num1';
$str2 = 'trying backslash n and backslash t inside signle quoted string \n \t';
$str3 = 'Using single quote \'my quote\' and \@backslash';

echo $str1 . '<br>';
echo $str2. '<br>';
echo $str3 . '<br>';

echo '<br>';
echo '============================';
echo '<br>';

$str = "Hello text within double quote";
echo $str . '<br>';

$str1 = "Using double 'quote' directly inside double quoted string";
echo $str1 . '<br>';

echo '<br>';
echo '============================';
echo '<br>';

$str1 = "Hello text
multiple line
text within double quoted string";
$str2 = "Using double \"quote\" with backslash inside double quoted string";
$str3 = "Using escape sequences \n in double quoted string";

echo $str1 . '<br>';
echo $str2. '<br>';
echo $str3 . '<br>';

echo '<br>';
echo '============================';
echo '<br>';