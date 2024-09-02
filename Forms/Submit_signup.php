<?php
session_start();
require 'Connection.php';

// Function to generate five unique numbers
function generateUniqueNumbers($length = 5) {
    $numbers = [];
    while (count($numbers) < $length) {
        $num = rand(10000, 99999); // Random 5-digit number
        if (!in_array($num, $numbers)) {
            $numbers[] = $num;
        }
    }
    return $numbers;
}

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    // Verify Email
    $stmt = $dbconnection->prepare("SELECT * FROM patient_tb WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['msg'] = "Email has been taken";
        header('location: Signup.php');
        exit;
    } else {
        $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

        // Generate unique numbers
        $uniqueNumbers = generateUniqueNumbers();
        $patientID = implode('-', $uniqueNumbers); // Combine numbers into a single string

        // Save into the database
        $stmt = $dbconnection->prepare("INSERT INTO patient_tb (First_name, Last_name, Email, Password, Patient_Gender, patient_ID) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $firstname, $lastname, $email, $hashedpassword, $gender, $patientID);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Successfully saved";
            header('location: Login.php');

        } else {
            $_SESSION['msg'] = "Unsuccessful registration";
            exit;
        }
    }
}
?>
