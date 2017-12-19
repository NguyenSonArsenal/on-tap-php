<?php

echo " + Demo function <br>";
function hello() {
  echo "I wanna say hello";
}

hello();

echo '<br>';
echo '==============================';
echo '<br>';

echo " + Function with paramatter <br>";

function sayHello($name) {
  echo "Hi, $name" . '<br>';
}

sayHello('Son');
sayHello('Mr Hung');
sayHello('Phu Trung Phan');

echo '<br>';
echo '==============================';
echo '<br>';

function sayHelloBaby($name, $age) {
  echo "Hi, my name is $name, I'm $age year old" . '<br>';
}

sayHelloBaby("Son", '22');
sayHelloBaby("Hung", '24');
sayHelloBaby("Phu Trung Phan", '23');

echo '<br>';
echo '==============================';
echo '<br>';

echo " + Call function PHP by reference <br>";

function adder(&$str2) {
  $str2.= " Call By Reference";
}

$str = 'Hello';
adder($str);
echo $str;

echo '<br>';
echo '==============================';
echo '<br>';

echo " + Default Argument Value <br>";

function hi($name = "18+"){
  echo "Hi $name <br>";
}

hi();
hi('xxx');
hi('xyz');

echo '<br>';
echo '==============================';
echo '<br>';

echo " + Returning Value <br>";

function getValue($n) {
  return 2*$n;
}

$result = getValue(100);
echo $result;