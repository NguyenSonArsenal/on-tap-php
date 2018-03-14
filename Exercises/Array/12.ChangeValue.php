<?php

echo " ? Write a PHP function to change the following array's all values to upper or lower case";
echo "<br>";
echo "==============================";
echo "<br>";

$color = array('A' => 'Blue', 'b' => 'Green', 'c' => 'Red');



foreach ($color as $key => $value)
{
    $color[$key] = strtoupper($value);
}
echo 'Upper case values: ';
echo '<pre>';
print_r($color);

foreach ($color as $key => $value)
{
    $color[$key] = strtolower($value);
}

echo '<br>';

echo 'Lower case values: ';
echo '<pre>';
print_r($color);

