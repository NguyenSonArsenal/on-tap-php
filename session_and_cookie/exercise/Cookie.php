<?php

setcookie('name', 'nguyen van son', time()+600);
setcookie('age', '23', time()+600);
setcookie('gender', 'boy', time()+600);
setcookie('email', 'vanson297.nguyen@gmail.com', time()+600);

class Cookie
{
    public static function make($name, $value, $time)
    {
        setcookie($name, $value, $time);
    }

    public static function get($name)
    {
        $cookie = isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
        echo 12;
        return $cookie;
    }

    public static function add()
    {
        if (isset($_COOKIE))
            return $_COOKIE;
        else
            return '$_COOKIE is not exits <br>';
    }
}

$cookie = Cookie::add();
echo '<pre>';
print_r($cookie);

echo '$_COOKIE[\'name\'] = ' . $_COOKIE['name'] . '<br>';