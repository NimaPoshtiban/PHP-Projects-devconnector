<?php
include "bootstrap/init.php";
if (Login::is_user_logged_in()) {
    redirect(BASE_URL);
}

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $result = Login::login($email,$password);
    
    if($result){
        redirect(BASE_URL);
    }else{
        message("INVALID CREDENTIAL");
        die();
    }

}


include "views/login.php";
