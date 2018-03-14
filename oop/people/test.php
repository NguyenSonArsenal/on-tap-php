<?php

include 'Person.php';

use \oop\people\Person as Person;

$person = new Person();
echo $person->getName();

// C2
//$person = new \oop\name_space_demo\Person();