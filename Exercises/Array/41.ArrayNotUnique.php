<?php
echo " ? Write a PHP program to identify the email addresses which are not unique.";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$test_array = array(
    'xyz@example.com',
    'xyz@example.com',
    'mno@example.com',
    'vanson297.nguyen@gmail.com',
    'vanson297.nguyen@gmail.com',
    'ducskt125@gmail.com'
);

$arrReplace = array();

function arrayNotUnique($arr, &$arrReplace)
{
    $total = count($arr);
    
    for ($i=0; $i<$total; $i++)
    {
        for ($j = $i+1; $j<$total; $j++)
        {
            if ($arr[$i] == $arr[$j])
            {
                $arrReplace[] = $arr[$i];
            }
        }
    }
    
    return $arrReplace;
    
}

$resultArrReplace = arrayNotUnique($test_array, $arrReplace);

$lengthArrTest = count($test_array);
$lengthArrReplace = count($arrReplace);

for ($i=0; $i<$lengthArrTest; $i++)
{
    $check = in_array($test_array[$i], $arrReplace);
    
    if($check)
    {
        echo "$test_array[$i] is not unique <br>";
    }
    else
    {
        echo "$test_array[$i] is unique <br>";
    }
}

echo '<pre>';
print_r($resultArrReplace);
