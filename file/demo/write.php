<?php



$file = fopen('demo.txt', 'w');
fwrite($file, 'toi iu em mat oy, that day');
$file = fopen('demo.txt', 'r');
echo fread($file, filesize('demo.txt'));