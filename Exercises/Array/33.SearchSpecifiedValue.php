<?php
echo " ? Write a PHP function to search a specified value within the values of an associative array.";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$exercises = array("part1"=>"PHP array", "part2"=>"PHP String", "part3"=>"PHP Math");

$arrKeys = array_keys($exercises);
$arrValues = array_values($exercises);

$find = 'Math';

$total = count($exercises);

for($i=0; $i<$total; $i++)
{
    $check = checkStringInsideAnother($arrValues[$i], $find);
    
    if ($check)
    {
        echo "String \"$find\" has found in $arrKeys[$i] <br>";
    }
    else
    {
        echo "String \"$find\" has not found in $arrKeys[$i] <br>";
    }
    
}


