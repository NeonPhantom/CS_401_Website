<?php
  session_start();
  session_destroy();
  header("Location: http://localhost/~grantheffner/project/login.php");
  exit;
