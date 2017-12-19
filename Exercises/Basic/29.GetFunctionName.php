<?php

echo "? Write a PHP script to get the names of the functions of a module";

echo "<br>";
echo "<br>";

function test() {
  echo 123456;
}

function test2() {
  echo 123456;
}

$arr = get_defined_functions();

echo '<pre>';
print_r($arr['user']);

echo '<pre>';
print_r(get_extension_funcs("json"));

echo '<pre>';
print_r(get_extension_funcs("xml"));


