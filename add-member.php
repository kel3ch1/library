<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "kelly";
$dbname = "librarymanagement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Process form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstName = $_POST["first_name"];
  $lastName = $_POST["last_name"];
  $phoneNumber = $_POST["phone_number"];
  $membershipID = $_POST["membership_id"];
  $membershipYear = $_POST["membership_year"];
  $age = $_POST["age"];

  // Insert data into members table
  $sql = "INSERT INTO members (Fname, Lname, Contact, M_ID, M_year)
  VALUES ('$firstName', '$lastName', '$phoneNumber', '$membershipID', '$membershipYear')";

  if ($conn->query($sql) === TRUE) {
    // Success alert message
    echo '<script>alert("Record added successfully");</script>';
  } else {
    // Error alert message
    echo '<script>alert("Error: ' . $conn->error . '");</script>';
  }
}

// Close connection
$conn->close();
?>
