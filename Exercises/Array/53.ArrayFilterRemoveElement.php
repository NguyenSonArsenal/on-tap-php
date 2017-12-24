<?php
echo " ? Write a PHP script to delete a specific value from an array using array_filter() function";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$colors = array('key1' => 'Red', 'key2' => 'Green', 'key3' => 'Black', 'key4' => 'Green');

$needle = 'Green';

function removeElement($value)
{
    global $needle;
    if ($needle === $value)
    {
        return true;
    }
    
    return false;
}

$result = array_filter($colors, 'removeElement');

echo '<pre>';
print_r($result);