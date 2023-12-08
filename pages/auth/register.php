<<?php pageAdd("include/header.php"); ?>
<div class="form">
  <h2>Register page</h2>
  <form method="POST" action="submit-register">
  <input type="text" name="name" placeholder="Full name" required>
  <input type="email" name="email" placeholder="Email" required>
  <input type="password" name="password" placeholder="Password" required>
  <div class="btn-grp" >
  <input type="submit" name="signup" value="Signup">
  <a class="btn" href="login">Login</a>
  </div>
  </form>
  </div>
 <?php pageAdd("include/footer.php");
?>
