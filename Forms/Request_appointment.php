<?php
// Include the database connection file
require 'Connection.php'; // Make sure this file contains your database connection setup

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $patient_name = trim($_POST['patient_name']);
    $email = trim($_POST['email']);
    $patient_phone = trim($_POST['patient_Phone']);
    $patient_ID = trim($_POST['patient_ID']);
    $appointment_department = trim($_POST['appointment_department']);
    $appointment_description = trim($_POST['appointment_description']);
    $date = trim($_POST['date']);
    $time = trim($_POST['time']);
    $duration = trim($_POST['duration']);
    $appointment_location = trim($_POST['appointment_location']);

    // Validate the Patient ID to ensure it's numeric and within length constraints
    if (!preg_match('/^\d{1,5}$/', $patient_ID)) {
        echo 'Invalid Patient ID. It must be a number with up to 5 digits.';
        exit();
    }

    // Prepare an SQL statement to prevent SQL injection
    $stmt = $dbconnection->prepare("
        INSERT INTO appointment_tb (
            patient_name,
            email,
            patient_phone,
            patient_ID,
            appointment_department,
            appointment_description,
            date,
            time,
            duration,
            appointment_location
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($dbconnection->error));
    }

    // Bind parameters to the SQL query
    $stmt->bind_param(
        'ssssssssss',
        $patient_name,
        $email,
        $patient_phone,
        $patient_ID,
        $appointment_department,
        $appointment_description,
        $date,
        $time,
        $duration,
        $appointment_location
    );

    // Execute the statement
    if ($stmt->execute()) {
        echo 'Appointment successfully requested!';
    } else {
        echo 'Error: ' . htmlspecialchars($stmt->error);
    }

    // Close the statement and connection
    $stmt->close();
    $dbconnection->close();
}
?>