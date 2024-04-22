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
  $transactionDate = $_POST["transaction_date"];
  $dueDate = $_POST["due_date"];
  $returnDate = $_POST["return_date"];
 
  // Insert data into transactions table
  $sql = "INSERT INTO transactions (T_ID, BookID, MemberID, T_date, Due_Date, RuturnDate)
  VALUES ('$transactionId', '$bookId', '$memberId', '$transactionDate', '$dueDate', '$returnDate')";

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
