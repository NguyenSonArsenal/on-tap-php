<?php

class Three {
    const PI = 3.14;
    public $test = 1;

    function showPI() {
        echo self::PI . 'selt is working' . '<br>';
        echo self::test . 'this is working' . '<br>';
        echo '<br>';
    }
}

// echo Three::PI;
$obj = new Three();

$obj->showPI();

echo $obj::PI;
