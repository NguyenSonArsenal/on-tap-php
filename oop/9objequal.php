<?php

// So sanh obj

class MyClass {
}

function toString($bool) {
    if($bool === false) return 'FALSE';
    return 'TRUE';
}

$a = new MyClass();
$b = new MyClass();
$c = $a;

echo '<br> $a == $b: ' . toString($a==$b); //
echo '<br> $a === $b: ' . toString($a===$b);
echo '<br> $a == $c: ' . toString($a==$c);
echo '<br> $a === $c: ' . toString($a===$c);




/*class MyClass {
}

function toString($bool) {
    if ($bool === false) {
        return 'FALSE';
    } else {
        return 'TRUE';
    }
}

$a = new MyClass();
$b = new MyClass();
$c = $a;

echo '<br>$a==$b : ' . toString($a == $b);
echo '<br>$a===$b : ' . toString($a === $b);
echo '<br>$a==$c : ' . toString($a == $c);
echo '<br>$a===$c : ' . toString($a === $c);*/