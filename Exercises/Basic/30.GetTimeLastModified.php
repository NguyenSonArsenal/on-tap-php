<?php

echo "? Write a PHP script to get the time of the last modification of the current page";

echo "<br>";
echo "<br>";

$fileName = './'.basename(__FILE__);

echo 'Name file is : ' . $fileName . '<br>';

function getLastTimeModified($file) {
  if(file_exists($file)) {
    return date ("\"l, dS F, Y, h:ia\"", filectime($file));
  }
  else {
    return false;
  }
}
if(getLastTimeModified($fileName) != false) {
  echo 'Last modified file is ' . getLastTimeModified($fileName);
} else {
  echo 'File is not exit';
}
