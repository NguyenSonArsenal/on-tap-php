<?php

function randString($length) {
  $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  
  $sizes = strlen($chars);
  
  $str = '';
  
  for ($i=0; $i<$length; $i++) {
    $str .= $chars[rand(0, $sizes-1)];
  }
  return $str;
}

$randString = randString(2);
echo $randString;