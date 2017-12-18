<?php

$myVariable = "My variable";
$day = 29;
$month = 7;
$year = 19.95;

echo 'My birthday is: ' . $day . '/' . $month . '/' . $year . '<br>';
echo "I love $myVariable" . '<br>';

// local variable
function handleLocalVariable(){
  $abc = 'variable inside function' . '<br>';
  echo $abc;
}

$abc = 'variable outside function' . '<br>';
echo $abc;
handleLocalVariable();

echo "============================" . '<br>';

// global variable

$x = 1;
$y = 2;

function handleGlobalVariableWay1() {
  global $x, $y;
  $y = $x+$y;
}
function handleGlobalVariableWay2() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

handleGlobalVariableWay1();
echo $y . '<br>';
handleGlobalVariableWay2();
echo $y . '<br>';

// static variable

function handleStaticVariable() {
  static $x = 0;
  echo $x;
  $x ++;
}

handleStaticVariable();
echo ' - ';
handleStaticVariable();
echo ' - ';
handleStaticVariable();

echo '<br>';

// parameter variable

function handleParameterVariable($mystring) {
  echo $mystring;
}

handleParameterVariable('Learning PHP is easy to eat candy');




