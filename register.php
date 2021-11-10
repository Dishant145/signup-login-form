<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Registration system PHP and MySQL</title>
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container1">
  <div class="signin-signup">
  <form method="post" action="register.php" class="sign-up-form">
    
    <h2 class="title1">Registeration Form</h2> 	
    <?php include('errors.php'); ?>
    <div class="input-field">
      <i class="fas fa-user"></i>
      <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
    </div>
    <div class="input-field">
      <i class="fas fa-user"></i>
      <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
    </div>
    <div class="input-field">
      <i class="fas fa-lock"></i>
      <input type="password" placeholder="Password" name="password_1" required>
      </div>
    <div class="input-field">
      <i class="fas fa-lock"></i>
      <input type="password" placeholder="Password" name="password_2" >
    </div>
    <button type="submit" class="btn" name="reg_user">Register</button>
    <p class="social-text">Already have an account?<a href="login.php">Login now</a></p>
    </form>
  </div>
</div>
</body>
</html>