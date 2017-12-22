<?php
echo " ? Write a PHP function to shuffle an associative array, preserving key, value pairs";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$colors = array("color1"=>"Red", "color2"=>"Green", "color3"=>"Yellow");

function shuffleAssociative($arr)
{
    $result = array();
    
    if(is_array($arr))
    {
        $arrKeys = array_keys($arr);
        
        shuffle($arrKeys);
        
        $total = count($arrKeys);
        
        for($i=0; $i<$total; $i++)
        {
            $result[$arrKeys[$i]] = $arr[$arrKeys[$i]];
        }
        return $result;
    }
    
    return false;
}

$result = shuffleAssociative($colors);
if($result)
{
    echo '<pre>';
    print_r($result);
}
else
{
    echo 'Input is not array';
}


