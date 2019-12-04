<?php
session_start();
?>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="images/Favicon.jpg" type="image" rel="shortcut icon" />
  </head>
  <body>
<?php
if (isset($_SESSION['message'])) {
   echo "<div class='message bad'>{$_SESSION['message']}</div>";
}
?>
    <form method="POST" action="login_handler.php">
      <div class="signup">LOGIN</div>
      <input type="text" placeholder="Email" name="login"/>
      <div class="signup">PASSWORD</div>
      <div><input type="password" placeholder="Password" name="password"/></div>
      <div><input type="submit"/></div>
    </form>

		<form method="POST" action="signup_handler.php">
      <div class="signup">SIGNUP</div>
      <input type="text" placeholder="Email" name="signup"/>
      <div class="signup">PASSWORD</div>
      <div><input type="password" placeholder="Password" name="password"/></div>
      <div><input type="submit"/></div>
    </form>

    <div class="signup">Return to <a href="index.html">Home Page</a></div>

  </body>
</html>
