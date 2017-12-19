<?php
echo $file = '';

$lastError = error_get_last();

if ($lastError != NULL) {
  echo '<pre>';
  print_r($lastError);
} else {
  echo 'No errors';
}
