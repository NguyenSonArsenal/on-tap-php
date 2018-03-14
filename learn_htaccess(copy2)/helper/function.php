<?php

function asset($file)
{
    echo $file;
    return base_url().'/'.ltrim($file, '/');
}

function base_url()
{
    return 'http://final.php';
}