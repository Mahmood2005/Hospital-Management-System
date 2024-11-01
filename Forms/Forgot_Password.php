<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> June Hospital Forgot Password</title>
  <link rel="stylesheet" href="./Form_style.css">
</head>
<body>
  <div class="wrapper">
    <form action="Request_reset.php" method="post">
      <h2>Reset Password</h2>
        <div class="input-field">
        <input type="text" name="email" required>
        <label>Enter your email</label>
      </div>
      <!-- <div class="input-field">
        <input type="password" required>
        <label>Enter your password</label>
      </div> -->
      <!-- <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div> -->
      <button type="submit">Reset</button>
      <div class="register">
        <p>You don't have an account? <a href="./Signup.php">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>