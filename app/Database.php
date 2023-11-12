<?php
class Database{
  private $user = "root";
  private $host = "localhost:3306";
  private $password = "root";
  private $db = "oopslogin";
  public $conn;

  public function __construct(){
    $this->conn = null;
    try{
      $this->conn = new PDO("mysql:host=$this->host; dbname=$this->db", $this->user, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
      echo "Connection: ". $e->getMessage();
    }
  }
}
