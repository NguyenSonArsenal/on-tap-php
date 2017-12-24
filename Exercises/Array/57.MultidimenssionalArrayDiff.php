<?php
echo " ? Write a PHP function to compares two multidimensional arrays and returns the difference";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$color=array('a'=>'White','b'=>'Red','c'=>'xxx');
$color4=array('a'=>'White','b'=>'Red','c'=>'zzz');
$color1=array('a'=>'White','b'=>'Red','c'=>array('a'=>'Green','b'=>'Blue','c'=>'Yellow'));
$color2=array('a'=>'White','b'=>'Red','c'=>array('a'=>'White','b'=>'Red','c'=>'Yellow'));

function myFunction ($key1, $key2)
{
    if ($key1 === $key2)
    {
        return 0;
    }
    
    return ($key1 > $key2) ? 1 : -1;
}

$result = array_diff_uassoc($color, $color4, 'myFunction');

echo '<pre>';
print_r($result);