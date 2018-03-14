<?php

// open 1 file
$file = @fopen('demo.txt', 'r');
$data = @file('demo.txt');

if(!$file)
    die('Not found this file');
echo '<br>==========<br>';

echo 'File to array by file(): <br>';
echo '<pre>';
print_r($data);
echo '<br>==========<br>';

echo 'Read file using fread() <br>';
echo fread($file, filesize('demo.txt'));
echo '<br>==========<br>';


echo 'get first line in file by fgets():<br>';
echo fgetc($file);
echo 1;
echo '<br>==========<br>';