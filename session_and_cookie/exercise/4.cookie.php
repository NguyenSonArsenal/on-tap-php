<?php

setcookie('name', 'nguyen van son', time()+600);
setcookie('age', '23', time()+600);
setcookie('gender', 'boy', time()+600);
setcookie('email', 'vanson297.nguyen@gmail.com', time()+600);

echo '<pre>';
print_r($_COOKIE);

echo 'Name: ' . $_COOKIE['name'] . '<br>';
echo 'Age: ' . $_COOKIE['age'] . '<br>';

echo 'after delete cookie email <br>';
setcookie('email', 'vanson297.nguyen@gmail.com', time()-600);

echo '<pre>';
print_r($_COOKIE);

