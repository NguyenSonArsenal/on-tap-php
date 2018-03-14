<?php

namespace session_and_cookie\exercise;

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
    public static function flash($key, $value)
    {

    }

    public static function keep($key, $value)
    {

    }

    public static function regenerate($key, $value)
    {

    }
}

$_SESSION['user'] = 'Nguyen van son';
$_SESSION['email'] = 'vanson297.nguyen@gmail.com';
$_SESSION['gender'] = 'boy';
$number = [2,9,0,7,1,9,9,5];
$_SESSION['number'] = $number;
$_SESSION['test'] = null;

$allSession = Session::all();
echo '<pre>';
print_r($allSession);

echo '<br>==========<br>';

$get = Session::get('user');
echo 'Get a session <br>';
echo 'SESSION[\'user\']: ' . $get;

echo '<br>==========<br>';
echo 'Check item in session and value # null by using has()<br>';
echo 'SESSION[\'user\']: ';
var_dump(Session::has('user'));

echo 'SESSION[\'test\']: ';
var_dump(Session::has('test'));

echo '<br>==========<br>';

echo 'Check item in session and value = null or not by using exits()<br>';

echo '<br>==========<br>';
echo 'Store a session by put() <br>';
Session::put('age', 23);
echo '<pre>';
print_r(Session::all());

echo '<br>==========<br>';
echo "push a new value to value session that is an array <br>";
Session::push('number', 29);
echo '<pre>';
print_r(Session::all());

echo '<br>==========<br>';
echo 'Remove a item from session by fogot()<br>';
Session::forget('age');
echo '<pre>';
print_r(Session::all());

echo '<br>==========<br>';
echo 'Remove a item from session by pull()<br>';
Session::pull('gender', 'boy');
echo '<pre>';
print_r(Session::all());

//echo '<br>==========<br>';
//echo 'Remove all items from session <br>';
//Session::flush();
//echo '<pre>';
//print_r(Session::all());