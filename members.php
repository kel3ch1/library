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
    <form action="add-member.php" method="post">  <h3>MEMBERS REGISTERATION FORM</h3>
        <label for="name">First Name:</label>
        <input type="text" name="first_name" id="name" required><br>

        <label for="name"> Last Name:</label>
        <input type="text" name="last_name" id="name" required><br>

        <label for="phone number">Phone number:</label>
        <input type="text" name="phone_number" id="phone number" required><br>

        <label for="Membership ID">Membership ID:</label>
        <input type="text" name="membership_id" id="Membership ID" required><br>

        <h3>Membership Year</h3>
        <select name="membership_year" id="Membership Year">
            <option value="">Select Membership Year</option>
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
        </select><br>

        <h3>Age</h3>
        <label for="Age">Age:</label>
        <input type="radio" name="age" id="available" value="less than 18" checked> less than 18
        <input type="radio" name="age" id="unavailable" value="18 - 25"> 18 - 25<br>
        <input type="radio" name="age" id="available" value="26 - 35" checked> 26 - 35
        <input type="radio" name="age" id="unavailable" value="36 - 45"> 36 - 45<br>
        <input type="radio" name="age" id="available" value="46 - 55" checked> 46 - 55
        <input type="radio" name="age" id="unavailable" value="from 56 and above"> from 56 and above<br>

        <input type="submit" value="SUBMIT">
       
    </form>
</body>
</html>
