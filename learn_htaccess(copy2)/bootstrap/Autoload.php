<?php

session_start();

use Library\Database;
use Library\Session;

define('ROOT', $_SERVER['DOCUMENT_ROOT']);

class Autoload
{
    public function __construct()
    {
        echo 'Autoload is running';
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
$conn = new Database(Database::SERVERNAME, Database::USERNAME, Database::PASSWORD, Database::DBNAME);
//new Session();