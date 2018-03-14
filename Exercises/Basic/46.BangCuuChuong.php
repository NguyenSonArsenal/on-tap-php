<?php

echo " ?  Bang Cuu Chuong";

echo "<br>";
echo "==============================";
echo "<br>";

$arr = [1,2,3,4,5,6,7,8,9,10];
$arr1 = [1,2,3,4,5,6,7,8,9,10];

echo "<table border=\"1\">";
for ($i = 0; $i < 10; $i++)
{
    echo'<tr>';
    for ($j = 0; $j <10; $j++)
    {
        echo '<td>' . $arr[$i] . ' * ' . $arr[$j] . '=' . $arr[$i] * $arr[$j] . '</td>';
    }
    echo '<tr>';
}
echo"</table>";