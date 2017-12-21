<?php
echo " ?  Write a PHP function to sort an array according to another array acting as a priority list";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$order = array(1,3,4,2);
$arr = array(2,1,3,4,2,1,2);

$lengthOrder = count($order);
$lengthArr = count($arr);

function sortbyPriority($a, $b)
{
    global $order;
    
    $length = count($order);
    
    for($i=0; $i<$length; $i++)
    {
        echo "$a -- $b <br>";
        if($a == $order[$i])
        {
            return -1;
        }
        elseif ($b == $order[$i])
        {
            return 1;
        }
    }
}

$mang = array(2,9,0,7,1,9,9,5);

function sortArr($a, $b)
{
    echo "$a -- $b <br>";
    
    if($a == $b)
    {
        echo '<pre>';
        return 0;
    }
    else
    {
        echo '<pre>';
        return ($a<$b) ? -1 : 1;
    }
    
    
}



//usort($arr, 'sortbyPriority');
usort($mang, 'sortArr');
echo '<pre>';
print_r($mang);
//// CHUA HOAN THANH





