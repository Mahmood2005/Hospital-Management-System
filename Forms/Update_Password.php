<?php
require 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST['token'];
    $newPassword = $_POST['password'];

    // Verify the token
    $stmt = $dbconnection->prepare("SELECT * FROM password_resets WHERE token = ? AND expires_at > NOW()");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $resetRequest = $result->fetch_assoc();
        $userId = $resetRequest['Patient_ID'];

        // Hash the new password
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Update the user's password
        $stmt = $dbconnection->prepare("UPDATE patient_tb SET Password = ? WHERE PatientID = ?");
        $stmt->bind_param("si", $hashedPassword, $userId);
        $stmt->execute();

        // Delete the reset request
        $stmt = $dbconnection->prepare("DELETE FROM password_resets WHERE token = ?");
        $stmt->bind_param("s", $token);
        $stmt->execute();

        echo 'Password has been reset successfully.';
    } else {
        echo 'Invalid or expired token.';
    }

    $stmt->close();
    $dbconnection->close();
}
?>
