<?php
  require_once "./Connect_database.php";
  
  class Product extends Connect_database
  {
    // public $conn = parent::connect();
    public function getProducts()
    {
      // $conn = parent::connect();
      $sql = "SELECT * FROM products";
      echo 1;
      // return $result = $conn->query($sql);
    }
    
  }

?>