<?php

echo " ? Write a PHP program to compute the sum of the prime numbers less than 100";
echo "<br>";
echo "==============================";
echo "<br>";

$arrPrime = array();

function is_prime_via_preg_expanded($number)
{
    return !preg_match('/^1?$|^(11+?)\1+$/x', str_repeat('1', $number));
}

function listPrime($n)
{
    for($i=1; $i<$n; $i++)
    {
        if(is_prime_via_preg_expanded($i) == 1)
        {
            global $arrPrime;
            array_push($arrPrime, $i);
        }
        else
        {
            continue;
        }
    }
}

listPrime(100);
$count = count($arrPrime);
echo 'Count elememt is ' . $count . '<br>';

echo "List prime less than 100 is ";
for($i=0; $i<$count; $i++)
{
    echo $arrPrime[$i] . "   ";
}

echo "<br>Total of primes less 100 is " . array_sum($arrPrime);