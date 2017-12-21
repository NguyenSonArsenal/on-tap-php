<?php
echo " ? Write a PHP function to floor decimal numbers with precision <br>
Note: Accept three parameters number, precision, and separator";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$number = 1.155;
$precision = '.';

function floorDecimalNumbers($number, $precision, $separator)
{
    
    $numberToString = (string)$number;
    
    $precisionBelongToNumber = checkChareaterBelongString($precision, $numberToString);
    
    if($precisionBelongToNumber)
    {
        $arrExploreNumber = explode($precision, $numberToString);
        $length = strlen((string)$arrExploreNumber[1]);
        
        if($separator >= 0 && $separator <= $length)
        {
            return (string)$arrExploreNumber[0] . $precision . substr((string)$arrExploreNumber[1], 0, $separator);
        }
        else
        {
            echo "$separator is invalid <br>";
            return false;
        }
    }
    else
    {
        echo "$precision is not exit in $number <br>";
        return false;
    }
}

$result = floorDecimalNumbers(-2.9636, '.', 3);

if($result)
{
    echo "Result: " . $result;
}

