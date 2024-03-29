<?php
session_start();
if (!isset($_SESSION['logged_in']) || true !== $_SESSION['logged_in']) {
  header("Location: https://young-beach-75259.herokuapp.com/login.php");
  exit;
}
echo "ACCESS GRANTED  ";
?>

<html>
  <head>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="images/Favicon.jpg" type="image" rel="shortcut icon" />
  </head>
  <body>
    <div class="banner">
      <div class="logo">
        <img src="images/Logo.jpg" alt="logo">
      </div>
      <div class="login">
        <a class="login" href="https://young-beach-75259.herokuapp.com/logout_handler.php">Logout</a>
          <img src="???" alt="Logout">
        </a>
      </div>
      <h1>Grant Heffner Music</h1>
    </div>

    <div class="navbar">
      <ul>
        <li><a href="https://young-beach-75259.herokuapp.com/index_granted.php">Home</a></li>
        <li><a href="https://young-beach-75259.herokuapp.com/bio_granted.php">Biography</a></li>
        <li><a href="https://young-beach-75259.herokuapp.com/music_granted.php">Music</a></li>
        <li id="current-page"><a href="contact.html">Contact</a></li>
      </ul>
    </div>

    <div class="content">
      <div id="columns">
        <div class="column contact-and-music">
          <ul>
            <li>Email: ggheffner@gmail.com</li>
            <li>Phone #: (208) 781-1138</li>
            <li>Facebook: <a href="https://www.facebook.com/profile.php?id=100015761260139">Grant Heffner Facebook</a></li>
            <li>Soundcloud: <a href="https://soundcloud.com/user-945533196">Grant Heffner Soundcloud</a></li>
          </ul>
        </div>
      </div>
      <div class="clear"></div>
    </div>

    <div id="footer">
      <p>&copy2019 Grant Heffner</p>
    </div>

  </body>
</html>
