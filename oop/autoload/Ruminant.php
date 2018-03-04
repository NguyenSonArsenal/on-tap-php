<?php

namespace oop\autoload;

class Ruminant extends Animal
{
    public function eats($food)
    {
        if ('grass' === $food)
            parent::eats($food);
        else
            echo 'Rumiant eats ' . $food . '!';
    }
}