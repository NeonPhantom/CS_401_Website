<?php
session_start();
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
<?php
if (isset($_SESSION['message'])) {
   echo "<div class='message bad'>{$_SESSION['message']}</div>";
}
?>
    <form method="POST" action="login_handler.php">
      <div class="signup">LOGIN</div>
      <input type="text" name="login"/>
      <div class="signup">PASSWORD</div>
      <div><input type="password" name="password"/></div>
      <div><input type="submit"/></div>
    </form>

		<form method="POST" action="signup_handler.php">
      <div class="signup">SIGNUP</div>
      <input type="text" name="signup"/>
      <div class="signup">PASSWORD</div>
      <div><input type="password" name="password"/></div>
      <div><input type="submit"/></div>
    </form>

    <div class="signup">Return to <a href="index.html">Home Page</a></div>

  </body>
</html>
