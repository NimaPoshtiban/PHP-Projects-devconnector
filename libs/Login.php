<?php
defined('BASE_PATH') or die("Permission Denied!");
class Login
{
    use Email {Email::get_user_by_email as protected;}
    use Info;
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

    public static function login(string $email, string $password):bool
    {
        $user = static::get_user_by_email($email);
        if (is_null($user)) {
            return false;
        }
        if (password_verify($password, $user->password)) {
            # login is successful

            # gravatar
            $grav_url = "https://www.gravatar.com/avatar/" . md5(strtolower(trim($user->email))) ;
            $user->image = $grav_url;

            $_SESSION['login'] = $user;
            return true;
        }
        return false;
    }
    
    public static function get_user_id():int
    {
        $id =(int)$this->id;
        return $id;
    }
}
