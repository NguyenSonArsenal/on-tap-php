<?php

require 'config.php';

$sql = "SELECT * FROM restaurant";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - NAME : " . $row["name"]. " - CITY - " . $row["city"]
            . " - DISTRICT - " . $row["district"] . " - FULL - " . $row["full"]
            . " - PHONE - " . $row["phoneNumber"]. " - WEBSITE - " . $row["website"] . '<br>';
    }
} else {
    echo "0 results";
}

