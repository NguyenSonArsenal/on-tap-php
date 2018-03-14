<?php

echo "?  Write a PHP script to get the document root directory";

echo "<br>";
echo "<br>";

echo 'Document root is ' . $_SERVER['DOCUMENT_ROOT'];
echo "<br>";

// Cach 2

$rd = getenv('DOCUMENT_ROOT');
echo $rd."\n";