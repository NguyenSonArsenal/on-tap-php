<?php

class Database
{
  public $servername = "localhost";
  public $username = "root";
  public $password = "123456";
  public $dbname = 'do_an';
  public $conn;
  
  public function connect()
  {
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
  
    if ($this->conn->connect_error) {
      return $this->conn->connect_error . "Connection database failed: " ;
    } else {
      echo 'Connect db successfully';
      return $this->conn;
    }
  }
  
}