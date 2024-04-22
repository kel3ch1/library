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
        <label for="name">Book ID:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="title">Title of the book:</label>
        <input type="text" name="title" id="title" required><br>

        <label for="author">Author(s):</label>
        <input type="text" name="author" id="author" required><br>

        <label for="Publication Year">Publication Year:</label>
        <input type="text" name="Publication Year" id="Publication Year" required><br>

        <h3>Category</h3>
        <select name="category" id="category">
            <option value="">Select Category</option>
            <option value="Fiction">Fiction</option>
            <option value="Non-Fiction">Non-Fiction</option>
            <option value="Reference">Reference</option>
            <option value="Biography">Biography</option>
        </select><br>

        
        <h3> Quantity Available</h3>
        <label for="Quantity Available">Quantity Available:</label>
        <input type="radio" name="available" id="available" value="10" checked> 10
        <input type="radio" name="available" id="unavailable" value="20"> 20<br>
        <input type="radio" name="available" id="available" value="30" checked> 30
        <input type="radio" name="available" id="unavailable" value="40"> 40<br>
        <input type="radio" name="available" id="available" value="50" checked> 50
        <input type="radio" name="available" id="unavailable" value="60"> 60<br>
        <input type="radio" name="available" id="available" value="70" checked> 70
        <input type="radio" name="available" id="unavailable" value="80"> 80<br>
        <input type="radio" name="available" id="available" value="90" checked> 90
        <input type="radio" name="available" id="unavailable" value="100"> 100<br>

       
        <input type="submit" value="SUBMIT">
       
    </form>
</body>
</html>
