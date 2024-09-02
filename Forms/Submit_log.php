<?php
require 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the input data
    $patientID = $_POST['patient_ID'];
    $password = $_POST['password'];

    // Prepare SQL statement to prevent SQL injection
    $stmt = $dbconnection->prepare("SELECT * FROM patient_tb WHERE patient_ID = ?");
    $stmt->bind_param("s", $patientID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['Password'];

        // Verify the provided password against the hashed password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, redirect to the appropriate page
            header('Location: ');
            exit();
        } else {
            // Password is incorrect
            echo 'Password mismatch';
        }
    } else {
        // No user found with that patientID, redirect to signup
        echo 'No user found with that patientID';
        // header('Location: Signup.php');
        exit();
    }

    // Close the statement and connection
    $stmt->close();
    $dbconnection->close();
}
?>
