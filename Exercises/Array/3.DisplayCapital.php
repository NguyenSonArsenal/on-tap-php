<?php

$ceu = array(
    "Vietnam"=>"HaNoi",
    "Italy"=>"Rome",
    "Luxembourg"=>"Luxembourg",
    "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen",
    "Finland"=>"Helsinki",
    "France" => "Paris",
    "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland"=>"Dublin"
);

$length = count($ceu);

foreach ($ceu as $key => $value)
{
    echo "The capital of $key is $value <br>";
}