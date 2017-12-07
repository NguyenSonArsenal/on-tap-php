<?php

class Product
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
      return $this->conn;
    }
  }
  
  public function getProducts()
  {
    $conn = $this->connect();
    $sql = "SELECT * FROM products";
    return $conn->query($sql);
  }
  
  public function getProductById($productId)
  {
    $conn = $this->connect();
    $sql = "SELECT * FROM products WHERE id=$productId";
    return $conn->query($sql);
  }
}