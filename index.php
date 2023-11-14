<?php
session_start();
if(!isset($_SESSION['user'])){
  header('Location: ./pages/login.php');
  exit();
} else {
header("Location: ./pages/dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <nav>
      <ul>
        <li>
          <a href="./pages/login.php">Login</a>
        </li>
        <li>
          <a href="./pages/signup.php">Signup</a>
        </li>
      </ul>
    </nav>


  </body>
</html>
