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
  echo 'This page using HTTP'."<br>";
} else if($result == 1) {
  echo 'This page using HTTPS'."<br>";
} else {
  echo 'Nothing to say'."<br>";
}

echo '<pre>';
print_r($_SERVER);

// Cach 2

if (!empty($_SERVER['HTTPS']))
{
  echo 'https is enabled'."\n";
}
else
{
  echo 'http is enabled'."\n";
}