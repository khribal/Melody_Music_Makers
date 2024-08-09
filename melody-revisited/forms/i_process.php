<?php
include('../includes/db_con/db.php');

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Collect form data
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];

// Prepare and bind
$stmt = $con->prepare("INSERT INTO students (fname, lname, dob, phone) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $firstName, $lastName, $dob, $phone);

// Execute the statement
if ($stmt->execute()) {
    // Close statement and connection
    $stmt->close();
    $con->close();

    header('Location: ../index.php?message=success');
    exit();
} else {
    $stmt->close();
    $con->close();

    // Show error message
    echo "Error: " . $stmt->error;
}


?>
