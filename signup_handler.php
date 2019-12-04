<?php
session_start();
require_once 'KLogger.php';
require_once 'Dao.php';
$dao = new Dao();
$logger = new KLogger ( "log.txt" , KLogger::WARN );
$username = $_POST['signup'];
$password = $_POST['password'];
$valid = false;
$userexists = false;
$userexists = $dao->isValidUser($username, $password);

if(!$userexists) {
  $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
  //$passPattern = '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$';
  if (preg_match($pattern, $username) === 1) {
      //if (preg_match($passPattern, $password) === 1) {
          $dao->saveUser($username, $password);
          $valid = true;
      /*} else {
          $logger->LogWarn("User login failed [{$username}]");
          $_SESSION['message'] = "Not a valid password.";
          header("Location: https://young-beach-75259.herokuapp.com/login.php");
          exit;
      }*/
  /*} else if preg_match($passPattern, $password) === 1) {
      $logger->LogWarn("User login failed [{$username}]");
      $_SESSION['message'] = "Not a valid email.";
      header("Location: https://young-beach-75259.herokuapp.com/login.php");
      exit;*/
  } else {
      $logger->LogWarn("User login failed [{$username}]");
      $_SESSION['message'] = "Not a valid email or password.";
      header("Location: https://young-beach-75259.herokuapp.com/login.php");
      exit;
  }

  $logger->LogDebug("Clearing the session array");
  $_SESSION = array();
  if ($valid) {
     $_SESSION['logged_in'] = true;
     $logger->LogInfo("User login successful [{$username}]");
     header("Location: https://young-beach-75259.herokuapp.com/index_granted.php");
     exit;
  } else {
     $logger->LogWarn("User login failed [{$username}]");
     $_SESSION['message'] = "Hi";
     header("Location: https://young-beach-75259.herokuapp.com/login.php");
     exit;
  }
} else {
   $logger->LogWarn("User login failed [{$username}]");
   $_SESSION['message'] = "This user already exists.";
   header("Location: https://young-beach-75259.herokuapp.com/login.php");
   exit;
}
