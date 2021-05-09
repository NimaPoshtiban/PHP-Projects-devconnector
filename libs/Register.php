<?php
defined('BASE_PATH') or die("Permission Denied!");
class Register {
  use Email;
  public static function register($userData):bool
  {
      $user  = static::get_user_by_email($userData['email']) ?? null;
      if($user){
        echo "<div class='alert alert-danger'>         This Email is being used by another user     </div>";
        return false;
      }
      
      global $pdo ;
      $sql = "INSERT INTO devconnector.users (name,email,password) VALUES(:name,:email,:password) ";
      $passwordHash = password_hash($userData['password'],PASSWORD_BCRYPT);
      $statement = $pdo->prepare($sql);
      $statement->execute([":name"=>$userData['name'],":email"=>$userData['email'],":password"=>$passwordHash]);
      return $statement->rowCount() ? true : false;
  }
}