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


if (!function_exists('clear_input'))
{
    function clear_input($data)
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
        if (strpos($param, '?'))
            return header("Location: $param");
        return header("Location: $param.php");
    }
}


if (!function_exists('dump'))
{
    function dump($param, $die = false)
    {
        echo '<pre>';
        print_r($param);

        if ($die != false)
        {
            die();
        }
    }
}

if (!function_exists('timestamp'))
{
    function timestamp()
    {
        return date('Y-m-d H:i:s');
    }
}

if (!function_exists('getSelected'))
{
    function getSelected($parent=[], $child=[], $property)
    {
        if(isset($child))
        {
            foreach ($child as $item)
            {
                if ($item[$property] == $parent[$property] ||
                    $property == $parent[$property])
                {
                    $tmp = 'selected';
                    echo $tmp;
                }
            }
        }

        return '';
    }
}