<?php
echo " ?  Write a PHP program to get the extension of a file";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

function getExtentionFile($file)
{
    $tmpArr = explode('.', $file);
    
    $total = count($tmpArr);
    
    return $tmpArr[$total-1];
    
    // cach 2
    // return strtolower(end($tmpArr));
}

$file  = '32.xxx.php';

echo "The extention of file $file is " . getExtentionFile($file);