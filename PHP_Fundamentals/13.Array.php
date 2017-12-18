<?php

$arr = array(1,2,3,4,5);
echo "Array init is: $arr[0] $arr[1] $arr[2] $arr[3] $arr[4]";

echo '<br>';
echo '============================';
echo '<br>';

//PHP Associative Array
$salary = array("Mr A"=>"1000$", "Mr B"=>"1500$", "Mr C"=>"1200$");
echo "Salary of Mr A is " . $salary['Mr A'] . '<br>';
echo "Salary of Mr B is " . $salary['Mr B'] . '<br>';
echo "Salary of Mr C is " . $salary['Mr C'] . '<br>';

echo '<br>';
echo '============================';
echo '<br>';

// PHP Multidimensional Array
$emp = array(
  array(1, "Mr A", "1000$"),
  array(2, "Mr B", "1200$"),
  array(3, "Mr C", "1500$"),
  array(4, "Mr D", "1200$")
);

for($row = 0; $row <= 3; $row++) {
  for($col = 0; $col <= 2; $col++) {
    echo $emp[$row][$col] . " ";
  }
  echo "<br>";
}

echo '<br>';
echo '============================';
echo '<br>';

// PHP Functions Array
$salary = array("Mr A"=>"1000$", "Mr B"=>"1500$", "Mr C"=>"1200$", "Mr D"=>"1500$", "Mr E"=>"1200$");
print_r(array_change_key_case($salary, CASE_UPPER));

echo "<br>";

echo "<pre>";
print_r(array_chunk($salary,3));

echo "<br>";

echo "Length of array is " . count($salary);

echo "<br>";
echo "<pre>";
// sort($salary);
foreach ($salary as $key => $value) {
  echo $key . "=>" . $value . '<br>';
}

$season = array('spring', 'summer', 'auturm', 'winter');
sort($season);
echo '<pre>';
print_r($season);
print_r(array_reverse($season));




