<?php
pageAdd("include/header.php"); ?>
<nav>
      <ul>
        <li><a href="../pages/login.php">Login</a></li>
        <li><a href="../pages/signup.php">Sign Up</a></li>
      </ul>
    </nav>
    <section>
      <h1>
      Hello <i><u>
        <?php echo $user_name; ?>
        </u></i>, welcome to your 
<i> Dashboard </i>
</h1><br>
<div>
<a class="btn" href="logout">Logout ?</a>
</div>
    </section>
<?php pageAdd("include/footer.php");
?>
