<!DOCTYPE html>
<html>
<head>
  <title>Enbedding php into html</title>
</head>
<body>
<?php
$var = 5;
?>
$var = 10; <br>

The value of $var is:
<?php
  echo $var;
  echo '<br>';
  echo '<br>';
  echo '=======================';
  echo '<br>';
  echo '<br>';
?>

<table>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
  </tr>
  <tr>
    <td>No</td>
    <td>No</td>
    <td>No</td>
    <td>No</td>
    <td>No</td>
    <td>Yes</td>
    <td>Yes</td>
  </tr>
</table>

<?php
  echo '<br>';
  echo '<br>';
  echo '=======================';
  echo '<br>';
  echo '<br>';
?>

<table>
  <tr>
    <?php for($i=1; $i<=7; $i++): ?>
      <td align="center"> <?=$i?></td>
    <?php endfor;?>
  </tr>
  <tr>
    <?php for($i=1; $i<=7; $i++): ?>
      <td align="center">
        <?php
          if($i <=5) echo 'No';
          else echo 'Yes'
        ?>
      </td>
    <?php endfor;?>
  </tr>
</table>
  


</body>
</html>