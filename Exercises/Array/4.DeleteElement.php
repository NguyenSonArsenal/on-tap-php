<?php

$arr = array(2,9,0,7,1,9,9,5);

echo  'Arr init: ' . '<br>' ;
echo '<pre>';
echo print_r($arr) . '<br>';

array_splice($arr, 1, 1);

echo 'Result: ' . '<br>';
echo '<pre>';
echo print_r($arr);