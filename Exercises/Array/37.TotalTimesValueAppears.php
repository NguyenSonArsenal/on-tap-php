<?php
echo " ? Write a PHP script to count the total number of times a specific value appears in an array";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$colors = array("c1"=>"Red", "c2"=>"Green", "c3"=>"Yellow", "c4"=>"Red");

$arrKeys = array_keys($colors);

$strToFind = 'Green';

echo 'Init array' . '<br>';
printKeyValueArray($colors);

echo '<br>';

function getTimeValueAppear($arr, $str)
{
    $arrValues = array_values($arr);
    
    if(is_array($arr))
    {
        $check = checkStringBelongToArrayValue($str, $arrValues);
        
        if($check)
        {
            $count = 0;
            
            foreach ($arr as $key => $value)
            {
                if($value === $str)
                {
                    $count++;
                }
            }
            
            if($count > 1)
            {
                echo "String \"$str\" appears $count times";
            }
            else
            {
                echo "String \"$str\" appears $count time";
            }
        }
        else
        {
            echo "String \"$str\" appears 0 time";
            return false;
        }
    }
    else
    {
        echo 'Input must be an array';
        return false;
    }
}

getTimeValueAppear($colors, $strToFind);

