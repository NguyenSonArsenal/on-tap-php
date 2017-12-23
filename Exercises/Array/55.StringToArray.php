<?php
echo " ? Write a PHP function to convert a string to an array
(trimming every line and remove empty lines)";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$string = "  IANA is the global coordinator of the DNS root.
The root is the upper-most part of the DNS hierarchy,
and involves delegating administrative responsibility
of “top-level domains”, which are the last segment of

a domain name, such as .com, .uk and .nz. Part of this
task includes evaluating requests to change the operators

of country code domains, as well as day-to-day maintenance
of the details of the existing operators. ";

$string = trim($string);

$lines = explode("\n", $string);

echo '<pre>';
print_r($lines);

$total = count($lines);

for ($i=0; $i<$total; $i++)
{
    if (strlen((string)$lines[$i]) == 0)
    {
        array_splice($lines, $i, 1);
    }
    $total = count($lines);
}

echo '<pre>';
print_r($lines);

