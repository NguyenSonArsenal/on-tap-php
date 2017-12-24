<?php
echo " ? Write a PHP script to combine (using one array for keys and another for its values)
 the following two arrays";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$array1 = array('x', 'y', 'y', '1');
$array2 = array(10, 20, 30, 'anh iu e');

function combineArray($arr1, $arr2)
{

}

$x = [];
$x[0] = '1';
$x[0] = '2';

print_r($x);


// cHUA HOAN THANH

// Result
//Array
//(
//    [x] => Array
//    (
//        [0] => 10
//    )
//
//    [y] => Array
//(
//    [0] => 20
//            [1] => 30
//        )
//
//)