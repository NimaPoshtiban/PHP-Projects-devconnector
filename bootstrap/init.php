<?php
# start using session
session_start();
include "constants.php";
include BASE_PATH . "config/config.php";
include BASE_PATH . "libs/helpers.php";
$dsn = "mysql:{$database_config->database};host={$database_config->host}";

try {
  $pdo = new PDO($dsn,$database_config->username,$database_config->password);

} catch (PDOException $error) {
  diePage("Failed to connect", $error->getMessage() . PHP_EOL);
}

include BASE_PATH . "libs/Login.php";