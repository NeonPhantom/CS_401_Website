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
    <title>Biography</title>
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
        <li id="current-page"><a href="bio.html">Biography</a></li>
        <li><a href="https://young-beach-75259.herokuapp.com/music_granted.php">Music</a></li>
        <li><a href="https://young-beach-75259.herokuapp.com/contact_granted.php">Contact</a></li>
      </ul>
    </div>

    <div class="content">
      <div id="columns">
        <div class="column bio">
          <h2>Biography</h2>
          <p>
            I was born in Mountain View, CA, and raised back and forth between Santa Cruz, CA
            and Horseshoe Bend, ID. I was homeschooled for the majority of my life, and spent
            10 years dedicated to gymnastics. After high school, I started college at BSU,
            where I am currently getting a degree in GIMM (Games, Interactive Media, and
            Mobile Technology).
          </p>
          <p>
            At some point in high school, I started messing around in GarageBand, and then in
            Logic Pro, and after several years of practice, I was able to write my own music.
            Despite having no formal training, I was able to pick it up quickly by composing
            by ear. Once I was well into getting my degree at BSU, I was able to write music
            for games made by several classmates of mine.
          </p>
        </div>
      </div>
      <div class="clear"></div>
    </div>

    <div id="footer">
      <p>&copy2019 Grant Heffner</p>
    </div>

  </body>
</html>
