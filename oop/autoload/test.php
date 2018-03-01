<?php

// require 'Autoload.php';

spl_autoload_register(function($class){
    echo 1;
    require_once $class . ".php";
});

$animal = new Cow();
$animal->eats('grass');