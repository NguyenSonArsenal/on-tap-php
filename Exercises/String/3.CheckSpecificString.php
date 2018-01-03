<?php
echo " Write a PHP script to check if a string contains a specific string" ;

echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$str =  'The quick brown fox jumps over the lazy dog.';

$findme = 'dog';

$check = strpos($str, $findme);

if ($check === false)
{
    echo "String '$findme' was not found in the string '$str' ";
}
else
{
    echo "String '$findme' was found in the string '$str' ";
}

