<?php

namespace crud_mysql\Library;

class Session
{
    /**
     *  retrie a session from $_SESSION
     * @param $key
     */
    public static function get($key)
    {
        $result = isset($_SESSION[$key]) ? $_SESSION[$key] : null;
        return $result;
    }

    /*
     * retrie all session from $_SESSION
     */
    public static function all()
    {
        if (isset($_SESSION))
            return $_SESSION;
        else
            return '$_SESSION is not exits <br>';
    }

    /*
     * Check if item present in session
     * Return true if item is exits in session and value # null
     * @param $key: item to check
     */
    public static function has($key)
    {
        $check = isset($_SESSION[$key]) ? $_SESSION[$key] : null;

        if ($check)
            return true;
        return false;
    }

    /*
     * Check if item present in session
     * Return true if item is exits in session and value is null or not
     * @param $key: item to check
     * CHUA HOAN THANH
     */
    public static function exists($key)
    {
        var_dump(empty($_SESSION[$key]));
        die;
        $check = 0;

        if (isset($value) | $value === null)
        {
            $check = 1;
        }

        var_dump($value);
        var_dump($check);
    }

    /*
     * To store data in the session
     */
    public static function put($key, $value)
    {
        if(isset($key))
        {
            $_SESSION[$key] = $value;
        }
        else
        {
            echo 'Missing argument 1 for put() function <br>';
        }
    }

    /*
     * push a new value to value session that is an array
     */
    public static function push($key, $value)
    {
        $result = isset($_SESSION[$key]) ? $_SESSION[$key] : null;

        if(gettype($result) === 'array' & isset($value))
        {
            array_push($_SESSION[$key], $value);
        }
        else
        {
            echo 'Something in wrong! <br>';
        }
    }

    /*
     * retrie and remove a session
     */
    public static function pull($key, $value)
    {
        if (isset($_SESSION[$key]) && $_SESSION[$key] === $value)
            unset($_SESSION[$key]);
        else
            echo 'Something in wrong';
    }


    /*
     * Remove all session
     */
    public static function flush()
    {
        unset($_SESSION);
    }

    /*
     * Remove a item from session
     */
    public static function forget($key)
    {
        if (isset($_SESSION[$key]))
            unset($_SESSION[$key]);
        else
            echo "Key $key is not exits in session";
    }

    /*
     * add session to next request
     */
    public static function flash($key, $value = null)
    {
        if ($key && $value == null)
        {
            if(self::has($key))
            {
                $message = self::get($key);
                unset($_SESSION[$key]);
                return $message;
            }
            return null;
        }
        else
        {
            self::put("$key", $value);
        }
    }

    public static function keep($key, $value)
    {

    }

    public static function regenerate($key, $value)
    {

    }
}

