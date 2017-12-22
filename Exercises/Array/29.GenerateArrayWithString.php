<?php
echo " ?  Write a PHP program to generate an array with a range taken from a string";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$stringTest = '1-5 18 9-11 27-31';
$result = array();
$minMax = array();

$tmpArr = explode(" ", $stringTest);

echo '<pre>';
print_r($tmpArr);

$total = count($stringTest);

foreach ($tmpArr as $key => $value)
{
   if(!strpos($value, '-'))
   {
       $result[] = $value;
   }
   else
   {
       $minMax = explode('-', $value);
       if ($minMax[0] < $minMax[1])
       {
           $result = array_merge($result, range($minMax[0], $minMax[1]));
       }
   }
}

echo '<pre>';
print_r($result);