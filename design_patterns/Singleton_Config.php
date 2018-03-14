<?php

class Config
{
    static private $instance = NULL;
    private $setting = array();

    // Private methods cannot be called
    private function __construct()
    {
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    // phuong thuc tra ve 1 thuc the cua class
    static function getInstance()
    {
        if (self::$instance == NULL) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    // phuong thuc nay thiet lap cau hinh
    function set($index, $value)
    {
        $this->setting[$index] = $value;
    }

    // phuong thuc lay thiet lap cau hinh
    function get($index)
    {
        return $this->setting[$index];
    }
}

// tao mot obj config
$config = Config::getInstance();

$config->set('databased_connected', 'true');
echo '<p>$config["databse_connected"] : ' . $config->get('databased_connected');

$test = Config::getInstance();
$test->set('database_connected', 'true');
echo '<p>$config["databse_connected"] : ' . $test->get('databased_connected');