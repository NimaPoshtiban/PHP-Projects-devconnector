<?php
include "bootstrap/init.php";
if (Login::is_user_logged_in()) {
    redirect(BASE_URL);
}

// if(!Login::is_user_logged_in()){
//   header("Location: " . BASE_URL,303);
// }

include "views/login.php";
