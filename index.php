<?php
include "bootstrap/init.php";

include "views/index.php";

if($_GET['logout']=="true"){
  Login::logout();
  redirect(BASE_URL);
}