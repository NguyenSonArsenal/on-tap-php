<?php
session_start();

use crud_mysql\Library\Database as Database;
use crud_mysql\Library\Session as Session;

define ('ROOT', $_SERVER['DOCUMENT_ROOT']);

class Autoload
{
    public function __construct()
    {
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

new Autoload();
$conn = new Database(Database::SERVERNAME, Database::USERNAME, Database::PASSWORD, Database::DBNAME);
new Session();
