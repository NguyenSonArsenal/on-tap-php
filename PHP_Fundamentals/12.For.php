<?php

for ($n = 1; $n <=10; $n ++) {
  echo "$n <br>";
}

echo '<br>';
echo '============================';
echo '<br>';

for ($n = 1; $n <=2; $n ++) {
  for ($m =1; $m <=3; $m ++) {
    echo "$n $m<br>";
  }
}

echo '<br>';
echo '============================';
echo '<br>';

$season = array("spring", "summer", "autumn", "winter");
foreach ($season as $item) {
  echo "Season is: $item <br>";
}
