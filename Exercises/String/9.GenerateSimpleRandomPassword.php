<?php
echo "Write a PHP script to generate simple random password 
[do not use rand() function] from a given string" ;

echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

function randomPassword($length) {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";

    $lengthAlphabet = strlen($alphabet);

    $pass = '';

    for ($i=0; $i<$length; $i++)
    {
        $intRand = mt_rand(0, $lengthAlphabet-1);
        $pass .= $alphabet[$intRand];
    }

    echo $pass;

}

randomPassword(8);

