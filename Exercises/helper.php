<?php

function printValueArray($arr)
{
    foreach ($arr as $key => $value)
    {
        echo $value . ' &nbsp&nbsp&nbsp ';
    }
}

function swap(&$x, &$y)
{
    $tmp = $x;
    $x = $y;
    $y = $tmp;
}