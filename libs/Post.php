<?php

class Post
{
    use Info;
    public static function get_all_posts()
    {
        global $pdo;
        $sql = "SELECT * from devconnector.posts";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $records = $statement->fetchAll(PDO::FETCH_OBJ);
        return $records ?? null;
    }
    public static function create_post(string $content):bool
    {
        global $pdo;
        $id = static::get_user_info()->id;
        $sql = "INSERT INTO devconnector.posts (user_id,content)  VALUES (?,?)";
        $statement = $pdo->prepare($sql);
        $statement->execute([$id,"$content"]);
        $result = $statement->rowCount();
        return $result? true :false;
    }
    public static function fetch_user_posts()
    {
        global $pdo;
        $id = static::get_user_info()->id;
        $sql = "SELECT * from devconnector.posts WHERE user_id = ?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$id]);
        $records = $statement->fetchAll(PDO::FETCH_OBJ);
        return $records ?? null;
    }
}
