<?php

function getCurrentFile() {
  return basename(__FILE__);
}

function getURL() {
  $result = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
  return $result;
}

function getHost() {
  $result = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
  return $result;
}

function getURI() {
  $result = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : ' ';
  return $result;
}

$HTTP_REFERER = getURL() . getCurrentFile();


$schema = explode("://", $HTTP_REFERER);

echo "Schema: $schema[0] <br>" ;
echo "Host: " . getHost() . '<br>';
echo "Path: " . getURI() . '<br>';

// Cach 2
echo '<pre>';
print_r(parse_url($HTTP_REFERER));