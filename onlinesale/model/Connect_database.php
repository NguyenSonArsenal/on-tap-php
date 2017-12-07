<?php

class Connect_database
{
  public $servername = "localhost";
  public $username = "root";
  public $password = "123456";
  public $dbname = 'do_an';
  public $conn;
  
  public function connect()
  {
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
  
    // Check connection
    if ($this->conn->connect_error) {
      die("Connection database failed: " . $this->conn->connect_error);
    } else {
      echo 'ok';
      return $this->conn;
    }
  }
  
}