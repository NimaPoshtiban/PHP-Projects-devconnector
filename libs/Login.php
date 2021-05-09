<?php

class Login extends Email
{
    use Email {Email::get_user_by_email as protected;}

    private $id;

    public function __construct()
    {
        $this->id = self::get_user_info()->id ?? 0;
    }
    public static function is_user_logged_in():bool
    {
        return isset($_SESSION['login'])? true :false;
    }

    public static function logout():void
    {
        unset($_SESSION['login']);
    }

    public static function get_user_info()
    {
        return $_SESSION['login'] ?? null;
    }

    public static function login(string $email, string $password):bool
    {
        $user = static::get_user_by_email($email);
        if (is_null($user)) {
            return false;
        }
        if (password_verify($password, $user->password)) {
            # login is successful
            $_SESSION['login'] = $user;
            return true;
        }
        return false;
    }
    
    public static function get_user_id():int
    {
        return $this->id;
    }
}
