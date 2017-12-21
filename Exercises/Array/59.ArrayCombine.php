<?php
echo " Write a PHP program to create a range like the following array";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$arr = array();

$lowOfKey = 12;
$highOfKey = 25;
if ($lowOfKey > $highOfKey)
{
    swap($lowOfKey, $highOfKey);
}
$arrKeys = range($lowOfKey,$highOfKey);

$length = $highOfKey - $lowOfKey + 1;

$arrValues = array();

foreach ($arrKeys as $key => $value)
{
    array_push($arrValues, sumCharsOfNumber($value));
}


$arr = array_combine($arrKeys, $arrValues);

echo '<pre>';
print_r($arr);



