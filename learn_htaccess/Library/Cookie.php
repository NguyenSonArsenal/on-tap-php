<?php

namespace Library;

class Cookie
{
    public static function make($name, $value, $time)
    {
        setcookie($name, $value, $time);
    }

    public static function get($name)
    {
        $cookie = isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
        return $cookie;
    }

    public static function all()
    {
        if (isset($_COOKIE))
            return $_COOKIE;
        else
            return '$_COOKIE is not exits <br>';
    }

    public static function forget($name)
    {
        setcookie($name, '', time()-3600);
    }
}