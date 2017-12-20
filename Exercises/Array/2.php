<?php

$color = array('white', 'red', 'green');

echo '<ul>';
    $length = count($color);
    
    for ($i=0; $i < $length; $i++)
    {
        echo '<li>'. $color[$i] . '</li>';
    }
echo '</ul>';
