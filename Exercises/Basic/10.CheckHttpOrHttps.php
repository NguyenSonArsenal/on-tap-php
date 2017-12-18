<?php

function getURL() {
  $result = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
  return $result;
}

function checkHttpOrHttps($txt) {
  if ($txt == 'http')
    return 0;
  else if ($txt == 'https')
    return 1;
  else
    return;
}

$url = getURL();
$parseUrl = parse_url($url);

$result = checkHttpOrHttps($parseUrl['scheme']);

if ($result == 0) {
  echo 'This page using HTTP';
} else if($result == 1) {
  echo 'This page using HTTPS';
} else {
  echo 'Nothing to say';
}