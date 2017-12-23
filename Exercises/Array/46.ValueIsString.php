<?php
echo " ? Write a PHP function to check whether all array values are strings or not";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$arr1 = array('PHP', 'JS', 'Python');
$arr2 = array('SQL', 200, 'MySQL');

function checkValuesIsString($arr)
{
    foreach ($arr as $value)
    {
        $isString = is_string($value);
        if (!$isString)
        {
            return false;
        }
    }
    
    return true;
}

$checkIsString = checkValuesIsString($arr2);

echo 'Array: ';
printValueArray($arr2);
echo '<br>';

if ($checkIsString)
{
    echo "All values in array is string";
}
else
{
    echo "Have at least one element is not string in array";
}

