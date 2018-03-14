<?php

$myClosure = function () {
    return 'hello closure';
};

echo $myClosure() . '<br>';

$quantity = 1;

$caculate = function ($number) use ($quantity) {
    return $number + $quantity;
};

echo 'Caculate: ' . $caculate(5) . '<br>';

$i=1;

$closure = function () use (&$i){
  return $i++;
};

echo $closure() . '<br>';
echo $i;