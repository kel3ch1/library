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
    <form action="add-transaction.php" method="post">  
        <h3>Transaction details</h3>
        <label for="Transaction ID">Transaction ID:</label>
        <input type="text" name="transaction_id" id="Transaction ID" required><br>

        <label for="Book ID">Book ID:</label>
        <input type="text" name="book_id" id="Book ID" required><br>

        <label for="Member ID">Member ID:</label>
        <input type="text" name="member_id" id="Member ID" required><br>

        <label for="Transaction Date">Transaction Date:</label>
        <input type="date" name="transaction_date" id="Transaction Date" required><br>

        <label for="Due Date">Due Date:</label>
        <input type="date" name="due_date" id="Due Date" required><br>

        <label for="Return Date">Return Date:</label>
        <input type="date" name="return_date" id="Return Date" required><br>

        <input type="submit" value="SUBMIT">
       
    </form>
</body>
</html>
