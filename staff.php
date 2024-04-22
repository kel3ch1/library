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
    <h1>Add New Staff</h1>
    <form action="add-staff.php" method="post">  <h3>Staff Details</h3>
        <label for="name">Name of individual:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="phone number">Phone number:</label>
        <input type="text" name="phone_number" id="phone number" required><br>


        <label for="Staff ID">Staff ID:</label>
        <input type="text" name="staff_id" id="staff id" required><br>


        <h3>Position</h3>
        <select name="position" id="position">
            <option value="">Select Position</option>
            <option value="Manager">Manager</option>
            <option value="Library keeper">Library keeper</option>
            <option value="Cleaner">Cleaner</option>
            <option value="Library Assistant">Library Assistant</option>
            <option value="Accountant">Accountant</option>
        </select><br>
       

        <input type="submit" value="SUBMIT">
       
    </form>
</body>
</html>