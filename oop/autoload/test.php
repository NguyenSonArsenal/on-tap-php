<?php

namespace oop\autoload;

require 'Autoload.php';

use oop\autoload\Autoload;
use oop\autoload\xxx\Cow;
use oop\people\Person;

new Autoload();

$animal = new Person();
//$animal->eats('grass');
echo $animal->getName();