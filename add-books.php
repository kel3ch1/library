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
  $name = $_POST["name"];
  $title = $_POST["title"];
  $quantityAvailable = $_POST["quantity_available"];
  $publicationYear = $_POST["publication_year"];
 
  // Insert data into database
  $sql = "INSERT INTO staff (BookID, Title, Pubyear, Quantity)
  VALUES ('$name', '$title', '$pulicationYear', '$quantityAvailable')";

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
