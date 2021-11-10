<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container2">
  <div class="signin-signup">
  <form method="post" action="login.php" class="sign-up-form"> 
  	
	<h2 class="title2">Login Form</h2> 
  <?php include('errors.php'); ?>	
	<div class="input-field">
      <i class="fas fa-user"></i>
      <input type="text" placeholder="Username" name="username" required>
    </div>
	<div class="input-field">
      <i class="fas fa-lock"></i>
      <input type="password" placeholder="Password" name="password" required>
    </div>
  	<button type="submit" class="btn" name="login_user">Login</button>
    <p class="social-text">Already have an account?<a href="register.php">Register now</a></p>
  </form>
</div>
</div>
</body>
</html>