<?php

function asset($file)
{
    return base_url().'/'.ltrim($file, '/');
}

function base_url()
{
    return 'http://final.php';
}

function validate_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}