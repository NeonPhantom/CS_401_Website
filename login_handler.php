<?php
session_start();
require_once 'KLogger.php';
require_once 'Dao.php';
$dao = new Dao();
$logger = new KLogger ( "log.txt" , KLogger::WARN );
$username = $_POST['login'];
$password = $_POST['password'];
$valid = false;
$valid = $dao->isValidUser($username, $password);
$logger->LogDebug("Clearing the session array");
$_SESSION = array();
if ($valid) {
   $_SESSION['logged_in'] = true;
   $logger->LogInfo("User login successful [{$username}]");
   header("Location: https://young-beach-75259.herokuapp.com/index_granted.php");
   exit;
} else {
   $logger->LogWarn("User login failed [{$username}]");
   $_SESSION['message'] = "Invalid username or password";
   header("Location: https://young-beach-75259.herokuapp.com/login.php");
   exit;
}
