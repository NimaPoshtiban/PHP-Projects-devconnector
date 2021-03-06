<?php
defined('BASE_PATH') or die("Permission Denied!");
function diePage(string $msg = null):void
{
    echo "<strong>{$msg}</strong>";
    die();
}
trait Email
{
    public static function get_user_by_email(string $email)
    {
        global $pdo;
        $sql = "SELECT * from devconnector.users WHERE email = ?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$email]);
        $records = $statement->fetchAll(PDO::FETCH_OBJ);
        return $records[0] ?? null;
    }
}

trait Info
{
    public static function get_user_info()
    {
        return $_SESSION['login'] ?? null;
    }
}

function dd($var):void
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

function message(string $msg):void
{
    echo "<br><br><br><div class='alert alert-danger'>         {$msg}       </div>";
}

function redirect(string $url):void
{
    header("Location: $url");
    die();
}
