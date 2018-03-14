<?php

namespace oop\autoload;
define ('ROOT', $_SERVER['DOCUMENT_ROOT']);

class Autoload
{
    const ROOT ='xxx';


    public function __construct()
    {
        echo 'Autoload is running <br>';
        spl_autoload_register(function($class){
            $class = str_replace('\\', '/', $class);

            $file =  ROOT . $class. '.php';

            if(file_exists($file))
                require_once $file;
            else
                echo 'File is not exits!';
        });
    }
}