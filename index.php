<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7d8d8;
        }

        header {
            background-color: #750b0b;
            color: rgba(255, 255, 255, 0.774);
            padding: 1em;
            text-align: center;
        }

        nav {
            background-color: #f7f4f4;
            padding: 1em;
        }

        main {
            padding: 1em;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-around;
        }

        .section {
            flex: 1;
            padding: 1em;
            background-color: #da9292;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .section h2 {
            color: #fcf7f7;
        }

        .section p {
            color: #0f0f0f;
        }
    </style>
</head>
<body>

<header>
<div class="title-head">
    <h1>Library Management Systems</h1>
    <p>The ultimate home of classic books</p>
</div>
</header>

<nav>
    <ul class="nav">
        <li><a href="books.php">Books & Authors</a></li>
        <li><a href="borrowers.php">Borrowers</a></li>
        <li><a href="staff.php">Staff</a></li>
        <li><a href="members.php">Members</a></li>
        <li><a href="transaction.php">Transaction</a></li>
    </ul>
</nav>

<main>
    <div class="container">
        <div class="section">
            <h2 style="color: #183642;">Available Books</h2>
            <p>Explore the latest additions to our library collection.</p>
            <hr>
            <?php
            // Establishing connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "librarymanagement";

            $conn = new mysqli($servername, $username, $password, $database);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetching available books
            $sql = "SELECT * FROM books";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='display: flex; flex-direction: column; gap: 4px;'>" . "<p style='color: black;  border-radius: 5px; cursor: pointer; font-weight: bold;'>" . $row["Title"] . "</p>" . "<p class='font-size: 10px;'>" . $row['Quantity'] . " left" . "</p>" . "</div>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </div>

        <div class="section">
            <h2 style="color: #183642;">Popular Authors</h2>
            <p class="line-height: 20px;">Discover works from renowned authors in our library.</p>
            <hr>
            <!-- Display popular authors dynamically -->
        </div>

        <div class="section">
            <h2 style="color: #183642;">Upcoming Events</h2>
            <p>Stay tuned for exciting library events and activities.</p>
            <hr>
            <!-- Display upcoming events dynamically -->
            
        </div>
    </div>
</main>

</body>
</html>
