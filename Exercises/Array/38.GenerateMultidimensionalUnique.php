<?php
echo " ?  Write a PHP function to create a multidimensional unique array for any single key index";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$students = array(
    0 => array("city_id"=>"1", "name"=>"Sara",  "mobile_num"=>"1111"),
    1 => array("city_id"=>"2", "name"=>"Robin", "mobile_num"=>"2222"),
    2 => array("city_id"=>"1", "name"=>"Sonia", "mobile_num"=>"3333"),
    3 => array("city_id"=>"4", "name"=>"Son", "mobile_num"=>"3333"),
    4 => array("city_id"=>"5", "name"=>"Sara", "mobile_num"=>"1111"),
    5 => array("city_id"=>"5", "name"=>"Sara", "mobile_num"=>"1111"),
    6 => array("city_id"=>"5", "name"=>"Moy", "mobile_num"=>"1111"),
    7 => array("city_id"=>"7", "name"=>"Sara", "mobile_num"=>"1111"),
);
echo '<pre>';
//print_r(($students));

//function uniqueArray($arr, $keyUnique)
//{
//    $arrKeys = getAllKeys($arr);
//
//    if(in_array($keyUnique, $arrKeys))
//    {
//        foreach ($arr as $key => $value)
//        {
//
//        }
//    }
//}
//
$keyUnique = "city_id";
//
//uniqueArray($students, $keyUnique);
// die();

$total = count($students);

$arrKeys = getAllKeys($students);

if(checkItemBelongArray($keyUnique, $arrKeys))
{
    for($i=0; $i<$total; $i++)
    {
        for($j=$i+1; $j<$total; $j++)
        {
            if($students[$i][$keyUnique] == $students[$j][$keyUnique])
            {
                array_splice($students, $i, 1);
                $total = count($students);
                echo $total;
            }
        }
    }
    echo '<pre>';
    print_r(($students));
}
else
{
    echo "$keyUnique is not exits in keys array";
}


// CHUA HOAN THANH
