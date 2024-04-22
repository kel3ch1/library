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
  $bookId = $_POST["book_id"];
  $title = $_POST["title"];
  $pubyear = $_POST["publication_year"];
  $quantity = $_POST["quantity_available"];
 
  // Insert data into database
  $sql = "INSERT INTO books (BookID, Title, Pubyear, Quantity)
  VALUES ('$bookId', '$title', '$pubyear', '$quantity')";

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
