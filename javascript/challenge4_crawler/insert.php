<?php

require 'config.php';


$arrResult = [
    ['name' => 'VNP', 'address' => '102 Thai Thinh', 'star' => 1],
    ['name' => 'VNP 2', 'address' => '102 Thai Thinh', 'star' => 2],
    ['name' => 'VNP 3', 'address' => '102 Thai Thinh', 'star' => 3],
    ['name' => 'VNP 4', 'address' => '102 Thai Thinh', 'star' => 4],
    ['name' => 'VNP 12r', 'address' => '102 Thai Thinh', 'star' => 5]
];

foreach ($arrResult as $key => $item)
{
    $sql = "INSERT INTO hotel (name, address, star)
            VALUES ('$item[name]', '$item[address]', '$item[star]')";

    $result = $conn->query($sql);

    if ($result === TRUE)
    {
        echo 1;
    }
    else
    {
        echo 0;
    }
}