<?php
// Khoi tao session
session_start();

$_SESSION['user'] = 'Nguyen van son';

$number = [2,9,0,7,1,9,9,5];
$_SESSION['number'] = $number;

echo '$_SESSION[\'user\']: ' . $_SESSION['user'] . '<br>';

// Xóa 1 session
echo 'All session: ';
echo '<pre>' ;
print_r($_SESSION);

unset($_SESSION['number']);

echo 'After unset session number <br>';
echo '<pre>' . print_r($_SESSION) . '</pre>';

// Xoa tat ca session
unset($_SESSION);

if(!isset($_SESSION))
    echo 'All sessions are destroyed <br>';
