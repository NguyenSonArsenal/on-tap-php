<?php
echo " ? Write a PHP program to create a letter range with arbitrary length";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

function letterRange($n)
{
    $arrCharInput = array();
    $result = '';
    
    getCharFromAscii(65, 90, 25, $arrCharInput);
    getCharFromAscii(97, 122, 25, $arrCharInput);
    
    shuffle($arrCharInput);
    
    $total = count($arrCharInput);
    
    if ($n>0)
    {
        for($i=0; $i<$n; $i++)
        {
            $result .= $arrCharInput[rand(0, $total-1)];
        }
    }
    
    return $result;
}

$result = letterRange(4);
echo $result;

print_r(range('A', 'z'));




