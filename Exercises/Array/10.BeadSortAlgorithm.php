<?php

require '../helper.php';

$myArr = array(2,9,0,7,1,9,9,5);

echo 'Init array: ';
printValueArray($myArr) ;

echo '<br>';

$myLength = count($myArr);

for ($i=0; $i<$myLength; $i++)
{
    for($j=$myLength-1; $j>$i; $j--)
    {
        if($myArr[$j] < $myArr[$j-1])
        {
            $tmp = $myArr[$j];
            $myArr[$j] = $myArr[$j-1];
            $myArr[$j-1] = $tmp;
        }
    }
}

echo 'Array after ascending sort: ';
printValueArray($myArr);