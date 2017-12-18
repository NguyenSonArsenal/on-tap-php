<?php

$a = 47 ;

echo '$a = ' . $a . '<br>';

switch ($a) {
  case 0:
    echo "a equal 0";
    break;
  case 2:
    echo "a equal 2";
    break;
  case 4:
    echo "a equal 4";
    break;
  case 5:
    echo "a equal 5";
    break;
  default:
    echo "$a";
}

echo '<br>';
echo '============================';
echo '<br>';

$a = 5;
echo '$a = ' . $a . '<br>';
$check = is_int($a);

switch ($check) :
  case "true":
    switch ($a) {
      case 0:
        echo "a equal 0";
        break;
      case 2:
        echo "a equal 2";
        break;
      case 4:
        echo "a equal 4";
        break;
      case 5:
        echo "a equal 5";
        break;
      default:
        echo "$a";
    }
    break;
  default:
    echo "a is not int";
endswitch;