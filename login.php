<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = 'school';

// Check if the form has been submitted using the POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the entered phone, password, and designation
  $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';
  $designation = isset($_POST['designation']) ? $_POST['designation'] : '';

  // Connect to the database
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

  // Check if the connection was successful
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Escape user input to prevent SQL injection
  $phone = mysqli_real_escape_string($conn, $phone);
  $password = mysqli_real_escape_string($conn, $password);
  $designation = mysqli_real_escape_string($conn, $designation);

  // Create the SQL query to select the user with the entered phone, password, and designation
   $sql = "SELECT * FROM register WHERE phone = '$phone' AND password = password('$password') AND designation = '$designation'";
//exit();
  // Execute the query and get the result
  $result = mysqli_query($conn, $sql);

  // Check if the query was successful and if a user was found
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['user'] = $row['phone'];
    //print_r($_SESSION);exit();
    // Get the user information
    
    // Redirect the user based on their designation
    if ($row['designation'] == 'admin') {
      header("Location: admin.php");
    } elseif ($row['designation'] == 'teacher') {
      header("Location: teacher.php");
    }

  } else {

    // If no user was found, show an error message
    echo "Invalid login credentials";

  }

  // Close the database connection
  mysqli_close($conn);
}
?>





<!DOCTYPE html>
<html>
<head>
    <title>Login - School System</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        form {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
            margin: 50px auto;
            padding: 20px;
            text-align: center;
            width: 400px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: left;
        }

        input[type="text"],
        input[type="password"] {
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 14px;
            margin-bottom: 20px;
            padding: 10px;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #0077cc;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            padding: 10px 20px;
        }

        input[type="submit"]:hover {
            background-color: #005da8;
        }

        h1,
        h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        /* Navigation bar */
        nav {
            background-color: #0077cc;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        nav li {
            display: inline-block;
            margin: 0 10px;
        }

        nav a {
            color: #fff;
        }
    </style>
</head>
<body>
<nav>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="courses.php">Courses</a></li>
        <li><a href="contact.php">Contact</a></li>

    </ul>
</nav>
<h1>School System</h1>
<form method="POST" action="login.php">
    <h2>Login</h2>
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <label for="designation">Designation:</label>
    <select id="designation" name="designation" required>
        <option value="admin">Admin</option>
        <option value="teacher">Teacher</option>
    </select>
    <input type="submit" value="Login">
</form>
</body>
</html>
