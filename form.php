<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System - Add Item</title>
    <style>
        body {
  font-family: sans-serif;
  margin: 2rem;
  background-color: #f1b6b6;
}

h1 {
  text-align: center;
  margin-bottom: 1rem;
  background-color: #72213c;
  color: rgba(255, 255, 255, 0.774);
  padding: 1em;
}

label {
  display: block;
  margin-bottom: 0.5rem;
  font-weight: bold;
}

input[type="text"],
input[type="number"],
textarea {
  width: 100%;
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 1rem;
}

select {
  width: 100%;
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 1rem;
}

.form-section {
  margin-bottom: 1.5rem;
}

.form-section h3 {
  margin-bottom: 0.5rem;
}

input[type="radio"] {
  margin-right: 0.5rem;
}

    </style>
</head>
<body>
    <h1>Add New Item</h1>
    <form action="borrowers.html" method="post">  <h3>Book Details</h3>
        <label for="name">Name of individual:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="phone number">Phone number:</label>
        <input type="text" name="phone number" id="phone number" required><br>


        <label for="title">Title of the book:</label>
        <input type="text" name="title" id="title" required><br>

        <label for="author">Author(s):</label>
        <input type="text" name="author" id="author" required><br>

        <h3>Category</h3>
        <select name="category" id="category">
            <option value="">Select Category</option>
            <option value="Fiction">Fiction</option>
            <option value="Non-Fiction">Non-Fiction</option>
            <option value="Reference">Reference</option>
            <option value="Biography">Biography</option>
        </select><br>

        <h3>Status</h3>
        <select name="status" id="status">
            <option value="">Select Status</option>
            <option value="Borrowed and pending">Borrowed and pending</option>
            <option value="Borrowed and returned">Borrowed and returned</option>
            <option value="Borrowed and fine paid">Borrowed and fine paid</option>
            <option value="Borrowed and fine pending">Borrowed and fine pending</option>
        </select><br>

        <h3>Availability</h3>
        <label for="available">Available:</label>
        <input type="radio" name="available" id="available" value="Yes" checked> Yes
        <input type="radio" name="available" id="unavailable" value="No"> No<br>

        <h3>Borrowing Options (optional)</h3>
        <label for="max_borrowing_days">Maximum Borrowing Days (default: 14):</label>
        <input type="number" name="max_borrowing_days" id="max_borrowing_days" min="1"><br>

        <h3>Additional Information (optional)</h3>
        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="5"></textarea><br>

        <label for="keywords">Keywords (comma separated):</label>
        <input type="text" name="keywords" id="keywords" placeholder="e.g., history, romance"><br>

        <input type="submit" value="SUBMIT">
       
    </form>
</body>
</html>