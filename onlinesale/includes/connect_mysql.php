<?php

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = 'do_an';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection database failed: " . $conn->connect_error);
}