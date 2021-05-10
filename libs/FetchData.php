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

  public  static function get_all_data()
  {
    global $pdo ;
    $sql = "SELECT * FROM devconnector.users";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_OBJ);
    return $records;
  }

  
}


