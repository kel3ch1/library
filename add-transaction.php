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
  $transactionId = $_POST["transaction_id"];
  $bookId = $_POST["book_id"];
  $memberId = $_POST["member_id"];
  $dueDate= $_POST["due_date"];
  $ruturnDate = $_POST["ruturn_date"];
 
  // Insert data into database
  $sql = "INSERT INTO staff (T_ID, BookID, MemberID, Due_Date, RuturnDate)
  VALUES ('$transactionId', '$bookId', '$memberId', '$dueDate', '$ruturnDate')";

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
