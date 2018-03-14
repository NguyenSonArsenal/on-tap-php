<?php

$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr) . '<br>';

$arr = array("I", "am", "Mr A");
echo implode('-', $arr) . '<br>';

$str = 'Today is Friday';
echo '<pre>';
print_r(explode(' ', $str));