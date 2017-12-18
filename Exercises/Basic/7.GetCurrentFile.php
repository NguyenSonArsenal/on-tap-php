<?php

function getCurrentFile() {
  return basename(__FILE__);
}

$currentFileName = getCurrentFile();
echo 'Current file name is ' . $currentFileName;

echo '<pre>';
print_r($_SERVER);