<?php
  $title = 'Form Display Name';
  $name = '';
  isset($_POST['name']) ? $name = $_POST['name'] : '';
?>
<!DOCTYPE html>
<html>
<head>
  <title><?=$title?></title>
</head>
<body>
  <form action="#" method="post">
    <input type="text" name="name">
    <input type="submit" name="Submit Name">
  </form>

  <h3>Hello <?=$name?></h3>
</body>
</html>