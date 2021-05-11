<?php
include "bootstrap/init.php";
if (!Login::is_user_logged_in()) {
    redirect(BASE_URL);
}

include "views/dashboard.php";
