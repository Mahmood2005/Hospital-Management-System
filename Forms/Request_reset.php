<?php
require 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Check if the email exists in the database
    $stmt = $dbconnection->prepare("SELECT * FROM patient_tb WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $patientId = $user['Patient_ID']; // Assuming you have a user ID column
        $token = bin2hex(random_bytes(16)); // Generate a random token
        $expires = date('Y-m-d H:i:s', strtotime('+1 hour')); // Token valid for 1 hour

        // Save the token and expiry in the database
        $stmt = $dbconnection->prepare("INSERT INTO password_resets (Patient_ID, token, expires_at) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $patientId, $token, $expires);
        $stmt->execute();

        // Send the reset link to the user's email
        $resetLink = "https://yourdomain.com/Reset_Password.php?token=$token";
        $subject = "Password Reset Request";
        $message = "To reset your password, please click the following link: $resetLink";
        mail($email, $subject, $message);

        echo 'Password reset link has been sent to your email.';
    } else {
        echo 'No account found with that email.';
    }

    $stmt->close();
    $dbconnection->close();
}
?>
