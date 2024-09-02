<?php
require 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['token'])) {
    $token = $_GET['token'];

    // Verify the token
    $stmt = $dbconnection->prepare("SELECT * FROM password_resets WHERE token = ? AND expires_at > NOW()");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Token is valid, show the password reset form
        echo '<form action="Update_password.php" method="POST">
                <input type="hidden" name="token" value="'. htmlspecialchars($token) .'" />
                <label for="password">New Password:</label>
                <input type="password" name="password" required />
                <button type="submit">Reset Password</button>
              </form>';
    } else {
        echo 'Invalid or expired token.';
    }

    $stmt->close();
    $dbconnection->close();
}
?>
