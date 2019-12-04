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
    <title>Home</title>
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
        <li id="current-page"><a href="index.html">Home</a></li>
        <li><a href="https://young-beach-75259.herokuapp.com/bio_granted.php">Biography</a></li>
        <li><a href="https://young-beach-75259.herokuapp.com/music_granted.php">Music</a></li>
        <li><a href="https://young-beach-75259.herokuapp.com/contact_granted.php">Contact</a></li>
      </ul>
    </div>

    <div class="content">
      <div id="columns">
        <div class="column description">
          <p>
            This is Grant Heffner's website. Grant Heffner is a composer who primarily writes
            for video games, with his style ranging from loud and bombastic to quiet and intimate
            to dark and uncomfortable. He has written music of multiple different styles including
            orchestral, rock, techno, pop, and a little bit of jazz, sometimes all within the same
            soundtrack.
          </p>
          <p>
            Inspirations include Nobuo Uematsu, James Newton Howard, Danny Elfman, Alan Menken,
            George Bruns, Bernard Herrmann, Koji Kondo, James Horner, Motoi Sakuraba, Ippo Yamada,
            Hans Zimmer, Michael Giacchino, Thomas Newman, Yoko Shimomura, Ennio Morricone, John
            Barry, Jerry Goldsmith, John Williams.
          </p>
        </div>
        <div class="column photo">
          <img src="images/Notes300x300.jpg" alt="Some pic">
        </div>
      </div>
      <div class="clear"></div>
    </div>

    <div id="footer">
      <p>&copy2019 Grant Heffner</p>
    </div>

  </body>
</html>
