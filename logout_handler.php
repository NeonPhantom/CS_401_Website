<?php
  session_start();
  session_destroy();
  header("Location: https://young-beach-75259.herokuapp.com/login.php");
  exit;
