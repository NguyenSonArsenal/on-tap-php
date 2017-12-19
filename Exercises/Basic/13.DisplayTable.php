<?php

  $salary = array("Mr A"=>"1000$", "Mr B"=>"1200$", "Mr C"=>"1700$");

?>

<!DOCTYPE html>
<html>
<head>
  <title>Display table</title>
</head>
<body>

  <table border="1" cellspacing=0 cellpading=0>
    <tr>
      <th>Name</th>
      <th>Salary</th>
    </tr>
    <tr>
      <td>Mr A</td>
      <td><?= $salary['Mr A']?></td>
    </tr>
    <tr>
      <td>Mr B</td>
      <td><?= $salary['Mr B']?></td>
    </tr>
    <tr>
      <td>Mr C</td>
      <td><?= $salary['Mr C']?></td>
    </tr>
  </table>

</body>
</html>

