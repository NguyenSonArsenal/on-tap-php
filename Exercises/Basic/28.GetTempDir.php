<?php

echo "? Write a PHP script to print out all the credits for PHP";

echo "<br>";
echo "<br>";

echo sys_get_temp_dir();
echo '<br>';

// CaCH 2

$temp_file = tempnam(sys_get_temp_dir(), 'Tux');
echo $temp_file."\n";
