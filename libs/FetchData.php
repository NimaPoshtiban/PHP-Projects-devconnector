<?php

class FetchData
{
    use Info;
    private $id;
    private $company;
    private $location;
    private $skills;
    private $status;
    private $website;
    private $github_username;
    private $bio;
    public function __construct()
    {
        $this->id = static::get_user_info()->id ?? null;
    }

    /**
     * fetch all data from database from users table
     *
     */

    public static function get_all_data()
    {
        global $pdo ;
        $sql = "SELECT * FROM devconnector.users";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $records = $statement->fetchAll(PDO::FETCH_OBJ);
        return $records;
    }

 
    
    /**
     * @param string $companyName
     * @return bool
     */

    public static function set_company(string $companyName):bool
    {
        global $pdo;
        $id = static::get_user_info()->id;
        $sql = "UPDATE devconnector.users SET company = :company WHERE id = :id";
        $statement = $pdo->prepare($sql);
        $statement->execute([":company"=>"$companyName",":id"=>$id]);
        return $statement->rowCount() ? true : false;
    }

  
    /**
     * set location / update user location
     *
     * @param string $location
     * @return boolean
     */
    public static function set_location(string $location):bool
    {
        global $pdo;
        $id = static::get_user_info()->id;
        $sql = "UPDATE devconnector.users SET location = :location WHERE id = :id";
        $statement = $pdo->prepare($sql);
        $statement->execute([":location"=>"$location",":id"=>$id]);
        return $statement->rowCount() ? true : false;
    }
    /**
     * set or update skills
     *
     * @param string $skills
     * @return bool
     */
    public static function set_skills(string $skills):bool
    {
        global $pdo;
        $id = static::get_user_info()->id;
        $sql = "UPDATE devconnector.users SET skills = :skills WHERE id =:id";
        $statement = $pdo->prepare($sql);
        $statement->execute([":skills"=>"$skills",":id"=>$id]);
        return $statement->rowCount() ? true : false;
    }
    /**
     * updates status
     *
     * @param enum $status
     * @return boolean
     */
    public static function set_status($status):bool
    {
        $id = static::get_user_info()->id;
        global $pdo;
        $sql = "UPDATE devconnector.users SET status = :status WHERE id = :id";
        $statement = $pdo->prepare($sql);
        $statement->execute([":status"=>"$status",":id"=>$id]);
        return $statement->rowCount() ? true : false;
    }
    /**
     * updates website
     *
     * @param string $website
     * @return boolean
     */
    public static function set_website(string $website):bool
    {
        global $pdo;
        $id = static::get_user_info()->id;
        $sql = "UPDATE devconnector.users SET website = :website WHERE id = :id";
        $statement = $pdo->prepare($sql);
        $statement->execute([":website"=>"$website",":id"=>$id]);
        return $statement->rowCount() ? true : false;
    }
    /**
     * updates github username
     *
     * @param string $github_username
     * @return boolean
     */
    public static function set_github_username(string $github_username):bool
    {
        global $pdo;
        $id = static::get_user_info()->id;
        $sql = "UPDATE devconnector.users SET github_username = :github_username WHERE id = :id";
        $statement = $pdo->prepare($sql);
        $statement->execute([":github_username"=>"$github_username",":id"=>$id]);
        return $statement->rowCount() ? true : false;
    }
    /**
     * updates bio
     *
     * @param string $bio
     * @return boolean
     */
    public static function set_bio(string $bio):bool
    {
        global $pdo;
        $id = static::get_user_info()->id;
        $sql = "UPDATE devconnector.users SET bio = :bio WHERE id = :id";
        $statement = $pdo->prepare($sql);
        $statement->execute([":bio"=>"$bio",":id"=>$id]);
        return $statement->rowCount() ? true : false;
    }
}
