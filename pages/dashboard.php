<?php
require_once("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="./login.php">Login</a></li>
        <li><a href="./signup.php">Sign Up</a></li>
      </ul>
    </nav>
    <section>
      <h1>
      Hello <i><u><?php echo $_SESSION['user'];?></u></i>, welcome to your 
<i> Dashboard </i>
</h1><br>
<div>
<a class="btn" href="./logout.php">Logout ?</a>
</div>
    </section>
  </body>
</html>
