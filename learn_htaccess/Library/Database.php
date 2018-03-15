<?php
namespace Library;

use mysqli;
use Exception;

class Database
{
    public $conn;
    public $result;
    public $error;

    const SERVERNAME = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = '';
    const DBNAME = 'module_user';

    private $sql = '';

    function __construct()
    {
        $this->conn = new mysqli(self::SERVERNAME, self::USERNAME, self::PASSWORD, self::DBNAME);

        if ($this->conn->connect_error)
            die("Connection failed: " . $this->conn->connect_error);

        return $this->conn;
    }

    public static function query($sql)
    {
        $self = new self();

        // $self->sql = $sql;

        $self->result = $self->conn->query($sql);

//        var_dump($self->result->fetch_row());
//        die();

        if ($self->result && $self->result->num_rows > 0)
        {
            return $self;
        }
        else if ($self->result && $self->result->num_rows == 0)
        {
            echo "Record is not exits";
            die();
        }
        else{
            die('Error: ' . mysqli_error($self->conn));
            throw new Exception(mysqli_error($self->conn));
        }

    }

    public function toSql()
    {
        return $this->sql;
    }

    public function count()
    {
        if (is_object($this->result))
        {
            return ($this->result->fetch_row())[0]; // ???
        }
        else
        {
            return false;
        }
    }

    public function error()
    {
        $this->error = $this->conn->error;
        return $this->error;
    }

    public function getLastId()
    {
        return $this->conn->insert_id;
    }

    public function fetchAll()
    {
        $result = [];
        while($row = mysqli_fetch_assoc($this->result))
        {
            array_push($result, $row);
        }
        return $result;
    }
}



