<?php
include "bootstrap/init.php";

$names = FetchData::get_name();
$statuses = FetchData::get_status();
include "views/profiles.php";