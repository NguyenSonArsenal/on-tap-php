<?php
echo " ? Write a PHP a function to remove a specified, duplicate entry from an array.";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$numbers = array(4, 5, 6, 7, 4, 7, 8, 0, 7, 10);

echo 'INIT ARRAY: ';
printValueArray($numbers);
echo '<br>';

$total = count($numbers);

function checkDuplicate($arr, $valueInput)
{
    $total = count($arr);
    
    $itemDuplicate = [];
    
    $arrCountValue = array_count_values($arr);
    
    foreach ($arrCountValue as $key => $value)
    {
        if ($value != 1)
        {
            $itemDuplicate[] = $key;
        }
    }
    
    foreach ($itemDuplicate as $key => $value)
    {
        if ($value == $valueInput)
            return true;
    }
    
    return false;
}

function arrayUnique($array, $value)
{
    $inArr = in_array($value, $array);
    
    $total = count($array);
    
    if ($inArr)
    {
        $isDuplicate = checkDuplicate($array, $value);
        
        if ($isDuplicate)
        {
            $arrIndexValueDuplicate = [];
            
            for ($i=0; $i<$total; $i++)
            {
                if ($array[$i] == $value)
                {
                    array_push($arrIndexValueDuplicate, $i);
                }
            }
            
            foreach ($arrIndexValueDuplicate as $key => $value)
            {
                if ($key!=0)
                {
                    unset($array[$value]);
                }
            }
            
            return array_values($array);
        }
        return false;
    }
    else
    {
        echo "Value $value is not exit in array";
        return false;
    }
}

$result = arrayUnique($numbers, 44);

if ($result)
{
    echo "Array after remove duplicate is: ";
    printValueArray($result);
}
