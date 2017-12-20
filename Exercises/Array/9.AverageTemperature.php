<?php

$temperature = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
    73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

function printArray($arr)
{
    foreach ($arr as $key => $value)
    {
        echo $value . ' &nbsp&nbsp&nbsp ';
    }
}

function getAverageTemperature($arr)
{
    $length = count($arr);
    $total = 0;
    
    for($i=0; $i<$length; $i++)
    {
        $total += $arr[$i];
    }
    
    return $total/$length;
}

function getHighest($arr, $n)
{
    $result = array();
    
    $arr = array_values(array_unique($arr));
    
    sort($arr);
    
    $length = count($arr);
    
    if ($n > $length)
    {
        return false;
    }
    
    for ($i=$length -1; $i>$length-1-$n; $i--)
    {
        array_push($result, $arr[$i]);
    }
    
    return $result;
}

function getLowest($arr, $n)
{
    $result = array();
    
    $arr = array_values(array_unique($arr));
    
    sort($arr);
    
    $length = count($arr);
    
    if ($n > $length)
    {
        return false;
    }
    
    for ($i=0; $i<$n; $i++)
    {
        array_push($result, $arr[$i]);
    }
    
    return $result;
}

echo 'Average Temperature is : ' . getAverageTemperature($temperature) . '<br>';

$noHightest = 5;
$noLowtest = 7;

$resultHeightest = getHighest($temperature, $noHightest);
$resultLowest = getLowest($temperature, $noLowtest);

if ($resultHeightest)
{
    echo "List of $noHightest hightest temperatures is:  ";
    printArray($resultHeightest);
}
else
{
    echo "List of $noHightest hightest temperatures is:  ";
    echo 'Somethinng in wrong';
}

echo '<br>';

if ($resultLowest)
{
    echo "List of $noLowtest lowest temperatures is:  ";
    printArray($resultLowest);
}
else
{
    echo "List of $noLowtest lowest temperatures is:  ";
    echo " Something in wrong";
}
