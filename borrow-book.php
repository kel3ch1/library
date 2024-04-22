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
  $borrowingID = $_POST["Borrowing_ID"];
  $bookID = $_POST["Book_ID"];
  $memberID = $_POST["Member_ID"];
  $borrowDate = $_POST["Borrow_Date"];
  $returnDate = $_POST["Return_Date"];

  // Insert data into database
  $sql = "INSERT INTO borrowing (B_ID, BookID, MemberID, BorrowDate, ReturnDate)
  VALUES ('$borrowingID', '$bookID', '$memberID', '$borrowDate', '$returnDate')";

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
