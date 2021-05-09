<?php

function diePage(string $msg = null):void
{
    echo "<strong>{$msg}</strong>";
    die();
}
trait Email
{
    public static function get_user_by_email(string $email):string
    {
        global $pdo;
        $sql = "SELECT * from devconnector.users WHERE email = ?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$email]);
        $records = $statement->fetchAll(PDO::FETCH_OBJ);
        return $records[0] ?? null;
    }
}