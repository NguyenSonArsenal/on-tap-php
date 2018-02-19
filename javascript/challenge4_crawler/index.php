<?php
require 'config.php';

$inputFileContent = file_get_contents("data/all.txt"); // string

$matches  = preg_split ('/},/', $inputFileContent);

$size = count($matches);

echo 'Length all matches: ' . $size . '<br>';

echo '<pre>';

$result = [];

foreach ($matches as $key => $item)
{
    $tmp = $item . '}';
    array_push($result, $tmp);
}


for ($i=0; $i<$size; $i++) {
    $objRestaurant = json_decode($result[$i]);

    $name = $objRestaurant->name;
    $city = $objRestaurant->city;
    $district = $objRestaurant->district;
    $full = $objRestaurant->full;
    $phoneNumber = $objRestaurant->phoneNumber;
    $website = $objRestaurant->website;

    echo $name . ' - ' . $city . ' - ' .$district . ' - ' .$full . ' - ' . $phoneNumber . ' - ' . $website . '<br>';

    $sql = "INSERT INTO restaurant (name, city, district, full, phoneNumber, website)
            VALUES ('$name', '$city', '$district', '$full', '$phoneNumber', '$website')";


    //$query = $conn->query($sql);

}