<?php

function getLineNumberFile($file) {
  $linecount = 0;
  $handle = fopen($file, "r");
  
  while(!feof($handle)){
    $line = fgets($handle, 4096);
    $linecount += substr_count($line, PHP_EOL);
  }
  
  fclose($handle);
  
  return $linecount + 1;
}

$file = '11.RedirectAnotherPage.php';

if (file_exists($file)) {
  $lineNumber = getLineNumberFile($file);
  echo "Number line of file $file is $lineNumber";
} else {
  echo "File $file is not exit";
}

// Cach 2
echo '<br>';
echo "=========================";
echo '<br>';
echo "No line of file is: " . count(file($file));

