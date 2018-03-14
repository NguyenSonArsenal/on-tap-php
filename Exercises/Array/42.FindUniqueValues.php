<?php
echo " ? Write a PHP function to find unique values from multidimensional arrays
 and flatten them in zero depth";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$tmp = array(
    'a' => array( 1,2,3,4 ),
    'b' => array(
        'b1' => array(3,4,5),
        'b2' => array(8),
    'c' => array(2,9,0,7)
    )
);

$arrValues = [];
$result = [];

getAllValues($tmp, $arrValues);

echo 'INIT ARRAY' . '<br>';
printValueArray($arrValues);

$arrCountValue = array_count_values($arrValues);

foreach ($arrCountValue as $key => $value)
{
    if($value == 1)
    {
        array_push($result, $key);
    }
}

echo '<br>' . 'ITEM IS NOT BE DUPLICATE: ' . '<br>';
printValueArray($result);