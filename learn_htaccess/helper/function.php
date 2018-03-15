<?php

if (!function_exists('asset'))
{
    function asset($file)
    {
        return base_url() . '/' . ltrim($file, '/');
    }
}


if (!function_exists('base_url'))
{
    function base_url()
    {
        return 'http://final.php';
    }
}


if (!function_exists('validate_input'))
{
    function validate_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}


if (!function_exists('redirect'))
{
    function redirect($param)
    {
        return header("Location: $param.php");
    }
}