<?php
include "bootstrap/init.php";
if (Login::is_user_logged_in()) {
    redirect(BASE_URL);
}



if ($_SERVER["REQUEST_METHOD"]==="POST") {
    if ($_POST['password']!==$_POST['password2']) {
        message("Passwords Don't Match");
        die();
    }
  
    $userdata = ["name"=>$_POST['name'],"email"=>$_POST['email'],"password"=>$_POST['password']];
  
    $result = Register::register($userdata);

    if ($result) {
        redirect(BASE_URL . "login.php");
        echo "<br><br><br><br><br><br><span>Registered Successfully</span>";
    } else {
        echo "Oops something went wrong";
        message("Invalid Credentials");
    }
}

include "views/register.php";
