<?php

class Login
{
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

    
}
