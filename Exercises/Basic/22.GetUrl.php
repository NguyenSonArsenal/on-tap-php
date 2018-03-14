<?php

echo "?  Write a PHP script to get the full URL.";

echo "<br>";
echo "<br>";

$is_http = isset($_SERVER['https']) ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$uri = $_SERVER['REQUEST_URI'];

$url = $is_http . "://" . $host . $uri;

echo 'Url this page is ' . $url;