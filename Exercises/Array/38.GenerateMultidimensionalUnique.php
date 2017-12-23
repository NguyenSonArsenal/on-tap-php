<?php
echo " ?  Write a PHP function to create a multidimensional unique array for any single key index";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$keyUnique = "city_id";
$arrUnique = [];

$students = array(
    0 => array("city_id"=>"1", "name"=>"Sara",  "mobile_num"=>"1111"),
    1 => array("city_id"=>"2", "name"=>"Robin", "mobile_num"=>"2222"),
    2 => array("city_id"=>"1", "name"=>"Sonia", "mobile_num"=>"3333"),
    3 => array("city_id"=>"4", "name"=>"Son", "mobile_num"=>"3333"),
    4 => array("city_id"=>"5", "name"=>"Sara", "mobile_num"=>"1111"),
    5 => array("city_id"=>"5", "name"=>"Sara", "mobile_num"=>"1111"),
    6 => array("city_id"=>"5", "name"=>"Moy", "mobile_num"=>"1111"),
    7 => array("city_id"=>"1", "name"=>"Sara", "mobile_num"=>"1111"),
);


foreach ($students as $student)
{
    foreach ($student as $key => $item)
    {
        if ($key == $keyUnique && !array_key_exists($item, $arrUnique))
        {
            $arrUnique[$item] = $student;
        }
    }
}

echo '<pre>';
print_r($arrUnique);
