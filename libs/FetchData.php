<?php

class FetchData{

  use Info;
  private $company;
  private $location;
  private $skills;
  private $status;

  public function __construct()
  {
    
  }

  public  static function get_name()
  {
    global $pdo ;
    $sql = "SELECT name FROM devconnector.users";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_OBJ);
    return $records[0];
  }

  public static function get_status()
  {
    global $pdo;
    $sql = "SELECT status FROM devconnector.users";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_OBJ);
    return $records[0];
  }
}


