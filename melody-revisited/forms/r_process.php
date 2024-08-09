<?php
include('../includes/db_con/db.php');

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Collect form data
$instrumentType = $_POST['instrument_type'];
$brand = $_POST['brand'];
$inCondition = $_POST['in_condition'];
$instrumentFamily = $_POST['instrument_family'];

// Prepare and bind
$stmt = $con->prepare("INSERT INTO instruments (instrument_type, brand, in_condition, instrument_family) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $instrumentType, $brand, $inCondition, $instrumentFamily);

// Execute the statement
if ($stmt->execute()) {
    // Close statement and connection
    $stmt->close();
    $con->close();

    // Redirect with a success message
    header('Location: ../index.php?message=success');
    exit();
} else {
    echo "Error: " . $stmt->error;
}
?>
