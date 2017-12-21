<?php
echo " Write a PHP program to sort a multi-dimensional array set by a specific key";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$array = array();
$array[0]['name'] = 'Sana';
$array[0]['email'] = 'sana@example.com';
$array[0]['phone'] = '111-111-1234';
$array[0]['country'] = 'USA';

$array[1]['name'] = 'Robin';
$array[1]['email'] = 'robin@example.com';
$array[1]['phone'] = '222-222-1235';
$array[1]['country'] = 'UK';

$array[2]['name'] = 'Sofia';
$array[2]['email'] = 'sofia@example.com';
$array[2]['phone'] = '333-333-1236';
$array[2]['country'] = 'India';

echo ' + INIT ARRAY';

echo '<pre>';
print_r($array);



