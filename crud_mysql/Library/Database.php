<?php
namespace crud_mysql\Library;

use mysqli;
use crud_mysql\Library\Config as Config;

class Database
{
    private $servername, $username, $password, $dbname;
    public $conn;
    public $result;
    public $error;

    const SERVERNAME = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = '';
    const DBNAME = 'crawler';

    function __construct()
    {
        $this->servername  = Database::SERVERNAME;
        $this->username    = Database::USERNAME;
        $this->password    = Database::PASSWORD;
        $this->dbname      = Database::DBNAME;

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error)
            die("Connection failed: " . $this->conn->connect_error);

        return $this->conn;
    }

    function query($sql)
    {
        $this->result = $this->conn->query($sql);
        return $this->result;
    }

    function num_rows()
    {
        return $this->result->num_rows;
    }

    function error()
    {
        $this->error = $this->conn->error;
        return $this->error;
    }
}



