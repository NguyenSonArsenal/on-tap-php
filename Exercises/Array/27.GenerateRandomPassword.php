<?php
echo " ? Write a PHP function to generate a random password
 (contains uppercase, lowercase, numeric and other) using shuffle() function";
echo "<br>";
echo "==============================";
echo "<br>";

require '../helper.php';

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);

$initCharSpecial = array( '"', "!", "#", "$", "%", "&", "'", "(", ")",
    "*", "+","-", ".", "/", ":", ";", "<", "=", ">",
    "?", "@", "~", "|", "^", "_");

$rand_keys = array_rand($input, 2);

function getRandomValueFromArray($arr, $n, &$result = array())
{
    $total = count($arr);
    
    if ($n>0)
    {
        for($i=0; $i<$n; $i++)
        {
            $x = rand(0, 24);
            array_push($result, $arr[$x]);
        }
    }
}

function randomPassword($uppercase = 2, $lowercase = 5, $number = 3, $charSpecial = 2 )
{
    $result   = array();
    $password = '';
    
    global $initCharSpecial;
    
    getCharFromAscii(65, 90, $uppercase, $result);
    getCharFromAscii(97, 122, $lowercase, $result);
    getCharFromAscii(48, 57, $number, $result);
    getRandomValueFromArray($initCharSpecial, $charSpecial, $result);
    
    shuffle($result);
    
    $total = count($result);
    
    for($i=0; $i<$total; $i++)
    {
        $password.=$result[$i];
    }
    
    return $password;
}

$password = randomPassword();
// echo $password;

echo '<br>';
echo '==============================';
echo '<br>';

// Bonus
$str = 'hung';

// encode password follow $n character

function encodePassword($password, $length)
{

}

echo hash('sha256', $str);




