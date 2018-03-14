<?php
echo " Write a PHP script to extract the file name from the following string" ;

echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$test =  'www.example.com/public_html/index.php';

echo 'Init str: ' . $test . '<br>';

$arrSplitFromString = explode("/",$test);

$lengArr = count($arrSplitFromString);

echo "File name is: " .  $arrSplitFromString[$lengArr-1];

