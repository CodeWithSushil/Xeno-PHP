<?php
require_once "app/User.php";
require_once "check.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
  $obj = new User();
  $obj->email = $_POST["email"];
  $obj->password = $_POST["password"];
  if ($obj->login()) {
    $_SESSION['user'] = $obj->username;
    header("Location: ./dashboard.php");
    exit();
  } else {
    echo "User unable to login.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
<div class="form">
  <h2>Login page</h2>
  <form method="POST" action="./login.php">
  <input type="email" name="email" placeholder="Email" required>
  <input type="password" name="password" placeholder="Password" required>
  <div class="btn-grp" >
  <input type="submit" name="login" value="Login">
  <a class="btn" href="./signup.php">Signup</a>
  </div>
  </form>
  </div>
  </body>
</html>
