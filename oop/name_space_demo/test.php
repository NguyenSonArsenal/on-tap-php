<?php

include 'Person.php';

use \oop\name_space_demo\Person as Person;

$person = new Person();
echo $person->getName();

// C2
//$person = new \oop\name_space_demo\Person();