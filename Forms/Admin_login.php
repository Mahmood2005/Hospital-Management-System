<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>June Hospital Login</title>
  <link rel="stylesheet" href=".//Form_style.css">
</head>
<body>
  <div class="wrapper">
    <form action="Submit_log.php" method="post">
      <h2>Login</h2>
        <div class="input-field">
        <input type="text" name="Admin_ID" required>
        <label>Enter your Admin ID</label>
      </div>
      <div class="input-field">
        <input type="password" name="password" required>
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="./Forgot_Password.php">Forgot password?</a>
      </div>
      <button type="submit" name="submit">Log In</button>
      <!-- <div class="register">
        <p>Don't have an account? <a href="./Signup.php">Register</a></p>
      </div> -->
    </form>
  </div>
</body>
</html>