<?php

echo " ? Write a PHP program that multiplies corresponding elements of two given lists";

echo "<br>";
echo "==============================";
echo "<br>";

function multipliesCorrespondingElements ($arr1, $arr2)
{
    $length = count($arr1);
    
    $arrResult = array();
    
    for ( $i=0; $i <$length; $i++ )
    {
        $arrResult[] = $arr1[$i] * $arr2[$i];
    }
    
    return $arrResult;
}

$arr1 = [1,2,3,4,5];
$arr2 = [2,9,0,7,2];

echo '<pre>';
print_r($arr1);

echo '<pre>';
print_r($arr2);

echo "Result: <br>";

$lengthArr1 = count($arr1);
$lengthArr2 = count($arr2);

if ($lengthArr1 == $lengthArr2)
{
    $result = multipliesCorrespondingElements($arr1, $arr2);
    
    for ($i = 0; $i<$lengthArr2; $i++)
    {
        echo $arr1[$i] . ' * ' . $arr2[$i] . ' = ' . $result[$i];
        echo '<br>';
    }
    
}
else
{
    echo '2 lists must be same length';
}