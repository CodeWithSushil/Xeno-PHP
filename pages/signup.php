<?php
require_once "../app/User.php";
require_once "../app/check.php";
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['signup'])){
  $obj = new User;
  $obj->uname = $_POST['name']; 
  $obj->email = $_POST['email'];
  $obj->password = $_POST['password'];
  $obj->ip = $_SERVER['REMOTE_ADDR'];

  if($obj->signup()){
    header('Location: ./login.php');
  } else {
    echo "User unable to Register.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Signup page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/style.css" rel="stylesheet">
  </head>
  <body>
<div class="form">
  <h2>Signup page</h2>
  <form method="POST" action="./signup.php">
  <input type="text" name="name" placeholder="Full name" required>
  <input type="email" name="email" placeholder="Email" required>
  <input type="password" name="password" placeholder="Password" required>
  <div class="btn-grp" >
  <input type="submit" name="signup" value="Signup">
  <a class="btn" href="./login.php">Login</a>
  </div>
  </form>
  </div>
  </body>
</html>
