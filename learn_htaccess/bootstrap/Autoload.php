<?php

session_start();

define('ROOT', $_SERVER['DOCUMENT_ROOT']);

class Autoload
{
    public function __construct()
    {
        spl_autoload_register(function ($class) {
           $class = str_replace('\\', '/', $class);
           $file = ROOT . $class . '.php';

           if (file_exists($file))
               require $file;
           else
               echo 'File is not exits';
                return false;
        });

        // autoload file
        foreach(glob(ROOT. "helper/*.php") as $helper){
            require $helper;
        }
    }
}

new Autoload();