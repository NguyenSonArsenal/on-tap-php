<?php

function getLastModified($file) {
  return filectime($file);
}

$filename = '14.DisplaySourceCodePage.php';

$timeLastModified = getLastModified($filename);

echo "File $filename was last modified: " . date ("\"l, dS F, Y, h:ia\"", $timeLastModified);