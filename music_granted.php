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
    <title>Music</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="images/Favicon.jpg" type="image" rel="shortcut icon" />
    <script src="jQuery/action.js" type="text/javascript"></script>
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
        <li id="current-page"><a href="music.html">Music</a></li>
        <li><a href="https://young-beach-75259.herokuapp.com/contact_granted.php">Contact</a></li>
      </ul>
    </div>

    <div class="content">
      <div id="columns">
        <div class="column contact-and-music">
          <ul>
            <li>Two-Faced Diplomat: <audio src="music/TwoFacedDiplomat.mp3" controls="controls"></audio></li>
            <li>Theme from Kirkham: <audio src="music/MainTheme.mp3" controls="controls"></audio></li>
            <li>March of Commander: <audio src="music/MarchOfCommander.mp3" controls="controls"></audio></li>
            <li>The Honor Guard Theme: <audio src="music/TheHonorGuardTheme.mp3" controls="controls"></audio></li>
            <li>Ruby's Theme: <audio src="music/RubysTheme.mp3" controls="controls"></audio></li>
            <li>Horror Chords: <button onclick="sayMagicWord();">Coming Soon!</button></li>
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
