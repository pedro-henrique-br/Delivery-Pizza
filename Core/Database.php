<?php

namespace Core;

class Database {
  private $dbConfig;
 
  private $connection;

  public function __construct() {
    $this->dbConfig  = [
    "hostname" => $_SERVER['HOSTNAME'],
    "username" => $_SERVER["USERNAME"],
    "password" => $_SERVER["PASSWORD"],
    "database" => $_SERVER["DATABASE"]
    ];
    $this->connection = new \mysqli($this->dbConfig["hostname"], $this->dbConfig["username"], $this->dbConfig["password"], $this->dbConfig["database"]);
    if($this->connection->connect_error){
      die("Database connection error: " . $this->connection->connect_error);
    }
  }

  public function query($query,  $types = "", $params = []) {
    $queryPrepare = $this->connection->prepare($query);
    if(!$queryPrepare){
      die("Error");
    }
    if(!empty($types) && !empty($params)){
      $queryPrepare->bind_param($types,...$params);
    }
    $queryPrepare->execute();
    $queryResult = $queryPrepare->get_result();
    if(str_contains($query, "SELECT")){
      $result = [];
      foreach($queryResult as $row){
        $result[] = $row;
      }
      return $result;
    } else {
      return $queryPrepare->num_rows > 0;
    }
  }
}


?>