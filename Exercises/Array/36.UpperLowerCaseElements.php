<?php
echo " ? Write a PHP script to lower-case and upper-case, all elements in an array.";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$colors = array( "Red", "Green", "Black", "White");

printValueArray($colors);
echo '<br>';

$total = count($colors);

$arrUpperCase = array();
$arrLowerCase = array();

for($i=0; $i<$total; $i++)
{
    array_push($arrUpperCase, strtoupper($colors[$i]));
    array_push($arrLowerCase, strtolower($colors[$i]));
}

echo 'Todo uppercase value is: ';
printValueArray($arrUpperCase);
echo '<br>';

echo 'Todo lowercase value is: ';
printValueArray($arrLowerCase);
echo '<br>';

