<?php
defined('BASE_PATH') or die("Permission Denied!");

list($host, $username, $password, $database)=["localhost","root","","devconnector"];
$database_config = (object)[
  "host"=>$host,
  "username"=>$username,
  "password"=>$password,
  "database"=>$database
];